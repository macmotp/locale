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
 * Christmas Island
 */
final class CX extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::CHRISTMAS_ISLAND);
        $this->setCapital(CountryCapital::FLYING_FISH_COVE);
        $this->setCode(CountryCode::CX);
        $this->setAlpha3Code('CXR');
        $this->setDialCode('+61');
        $this->setTld('.cx');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CX);
        $this->setDefaultCurrency(CurrencyCode::AUD);
        $this->setDefaultTimezone(TimezoneCode::ASIA_BANGKOK);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::AUD,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_BANGKOK,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
