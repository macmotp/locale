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
 * New Zealand
 */
final class NZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::NEW_ZEALAND);
        $this->setCapital(CountryCapital::WELLINGTON);
        $this->setCode(CountryCode::NZ);
        $this->setAlpha3Code('NZL');
        $this->setDialCode('+64');
        $this->setTld('.nz');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::NZ);
        $this->setDefaultCurrency(CurrencyCode::NZD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_AUCKLAND);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::NZD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_AUCKLAND, TimezoneCode::PACIFIC_CHATHAM]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::MAORI,]));
    }
}
