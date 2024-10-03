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
 * Liechtenstein
 */
final class LI extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::LIECHTENSTEIN);
        $this->setCapital(CountryCapital::VADUZ);
        $this->setCode(CountryCode::LI);
        $this->setAlpha3Code('LIE');
        $this->setDialCode('+423');
        $this->setTld('.li');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LI);
        $this->setDefaultCurrency(CurrencyCode::CHF);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_VADUZ);
        $this->setDefaultLanguage(LanguageCode::GERMAN);
        $this->setCurrencies(new Collection([CurrencyCode::CHF,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_VADUZ,]));
        $this->setLanguages(new Collection([LanguageCode::GERMAN,]));
    }
}
