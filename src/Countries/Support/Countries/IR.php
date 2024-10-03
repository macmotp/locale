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
 * Iran
 */
final class IR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::IRAN);
        $this->setCapital(CountryCapital::TEHRAN);
        $this->setCode(CountryCode::IR);
        $this->setAlpha3Code('IRN');
        $this->setDialCode('+98');
        $this->setTld('.ir');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::IR);
        $this->setDefaultCurrency(CurrencyCode::IRR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_TEHRAN);
        $this->setDefaultLanguage(LanguageCode::PERSIAN);
        $this->setCurrencies(new Collection([CurrencyCode::IRR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_TEHRAN,]));
        $this->setLanguages(new Collection([LanguageCode::PERSIAN,]));
    }
}
