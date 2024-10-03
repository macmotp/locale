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
 * Afghanistan
 */
final class AF extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::AFGHANISTAN);
        $this->setCapital(CountryCapital::KABUL);
        $this->setCode(CountryCode::AF);
        $this->setAlpha3Code('AFG');
        $this->setDialCode('+93');
        $this->setTld('.af');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::AF);
        $this->setDefaultCurrency(CurrencyCode::AFN);
        $this->setDefaultTimezone(TimezoneCode::ASIA_KABUL);
        $this->setDefaultLanguage(LanguageCode::DARI);
        $this->setCurrencies(new Collection([CurrencyCode::AFN,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_KABUL,]));
        $this->setLanguages(new Collection([LanguageCode::DARI, LanguageCode::PASHTO,]));
    }
}
