<?php

namespace Macmotp\Countries\Support\Countries;

use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryCapital;
use Macmotp\Countries\Support\CountryCode;
use Macmotp\Countries\Support\CountryFlag;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Countries\Support\CountryName;
use Macmotp\Currencies\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use Macmotp\Languages\Support\LanguageCode;
use Macmotp\Timezones\Exceptions\InvalidTimezoneCodeException;
use Macmotp\Timezones\Support\TimezoneCode;

/**
 * Oman
 */
final class OM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::OMAN);
        $this->setCapital(CountryCapital::MUSCAT);
        $this->setCode(CountryCode::OM);
        $this->setAlpha3Code('OMN');
        $this->setDialCode('+968');
        $this->setTld('.om');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::OM);
        $this->setDefaultCurrency(CurrencyCode::OMR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_MUSCAT);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::OMR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_MUSCAT,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
