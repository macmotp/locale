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
 * Tajikistan
 */
final class TJ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::TAJIKISTAN);
        $this->setCapital(CountryCapital::DUSHANBE);
        $this->setCode(CountryCode::TJ);
        $this->setAlpha3Code('TJK');
        $this->setDialCode('+992');
        $this->setTld('.tj');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TJ);
        $this->setDefaultCurrency(CurrencyCode::TJS);
        $this->setDefaultTimezone(TimezoneCode::ASIA_DUSHANBE);
        $this->setDefaultLanguage(LanguageCode::TAJIK);
        $this->setCurrencies(new Collection([CurrencyCode::TJS,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_DUSHANBE,]));
        $this->setLanguages(new Collection([LanguageCode::RUSSIAN, LanguageCode::TAJIK,]));
    }
}
