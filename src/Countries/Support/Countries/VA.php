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
 * Vatican City
 */
final class VA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::VATICAN_CITY);
        $this->setCapital(CountryCapital::VATICAN_CITY);
        $this->setCode(CountryCode::VA);
        $this->setAlpha3Code('VAT');
        $this->setDialCode('+379');
        $this->setTld('.va');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::VA);
        $this->setDefaultCurrency(CurrencyCode::EUR);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_VATICAN);
        $this->setDefaultLanguage(LanguageCode::ITALIAN);
        $this->setCurrencies(new Collection([CurrencyCode::EUR,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_VATICAN,]));
        $this->setLanguages(new Collection([LanguageCode::ITALIAN,]));
    }
}
