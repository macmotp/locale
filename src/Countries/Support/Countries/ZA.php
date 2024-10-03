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
 * South Africa
 */
final class ZA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SOUTH_AFRICA);
        $this->setCapital(CountryCapital::PRETORIA);
        $this->setCode(CountryCode::ZA);
        $this->setAlpha3Code('ZAF');
        $this->setDialCode('+27');
        $this->setTld('.za');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::ZA);
        $this->setDefaultCurrency(CurrencyCode::ZAR);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_JOHANNESBURG);
        $this->setDefaultLanguage(LanguageCode::AFRIKAANS);
        $this->setCurrencies(new Collection([CurrencyCode::ZAR,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_JOHANNESBURG,]));
        $this->setLanguages(new Collection([
            LanguageCode::AFRIKAANS,
            LanguageCode::ENGLISH,
            LanguageCode::NDEBELE,
            LanguageCode::SEPEDI,
            LanguageCode::SESOTHO,
            LanguageCode::SWAZI,
            LanguageCode::TSONGA,
            LanguageCode::TSWANA,
            LanguageCode::VENDA,
            LanguageCode::XHOSA,
            LanguageCode::ZULU,
        ]));
    }
}
