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
 * Norway
 */
final class NO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::NORWAY);
        $this->setCapital(CountryCapital::OSLO);
        $this->setCode(CountryCode::NO);
        $this->setAlpha3Code('NOR');
        $this->setDialCode('+47');
        $this->setTld('.no');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::NO);
        $this->setDefaultCurrency(CurrencyCode::NOK);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_OSLO);
        $this->setDefaultLanguage(LanguageCode::NORWEGIAN);
        $this->setCurrencies(new Collection([CurrencyCode::NOK,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_OSLO,]));
        $this->setLanguages(new Collection([LanguageCode::NORWEGIAN,]));
    }
}
