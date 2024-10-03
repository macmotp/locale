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
 * Syria
 */
final class SY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::SYRIA);
        $this->setCapital(CountryCapital::DAMASCUS);
        $this->setCode(CountryCode::SY);
        $this->setAlpha3Code('SYR');
        $this->setDialCode('+963');
        $this->setTld('.sy');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SY);
        $this->setDefaultCurrency(CurrencyCode::SYP);
        $this->setDefaultTimezone(TimezoneCode::ASIA_DAMASCUS);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::SYP,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_DAMASCUS,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
