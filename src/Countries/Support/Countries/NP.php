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
 * Nepal
 */
final class NP extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::NEPAL);
        $this->setCapital(CountryCapital::KATHMANDU);
        $this->setCode(CountryCode::NP);
        $this->setAlpha3Code('NPL');
        $this->setDialCode('+977');
        $this->setTld('.np');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::NP);
        $this->setDefaultCurrency(CurrencyCode::NPR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_KATHMANDU);
        $this->setDefaultLanguage(LanguageCode::NEPALI);
        $this->setCurrencies(new Collection([CurrencyCode::NPR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_KATHMANDU,]));
        $this->setLanguages(new Collection([LanguageCode::NEPALI,]));
    }
}
