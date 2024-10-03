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
 * Luxembourg
 */
final class LU extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::LUXEMBOURG);
        $this->setCapital(CountryCapital::LUXEMBOURG);
        $this->setCode(CountryCode::LU);
        $this->setAlpha3Code('LUX');
        $this->setDialCode('+352');
        $this->setTld('.lu');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LU);
        $this->setDefaultCurrency(CurrencyCode::EUR);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_LUXEMBOURG);
        $this->setDefaultLanguage(LanguageCode::LUXEMBOURGISH);
        $this->setCurrencies(new Collection([CurrencyCode::EUR,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_LUXEMBOURG,]));
        $this->setLanguages(new Collection([
            LanguageCode::FRENCH,
            LanguageCode::GERMAN,
            LanguageCode::LUXEMBOURGISH,
        ]));
    }
}
