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
 * Moldova
 */
final class MD extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::MOLDOVA);
        $this->setCapital(CountryCapital::CHISINAU);
        $this->setCode(CountryCode::MD);
        $this->setAlpha3Code('MDA');
        $this->setDialCode('+373');
        $this->setTld('.md');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MD);
        $this->setDefaultCurrency(CurrencyCode::MDL);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_CHISINAU);
        $this->setDefaultLanguage(LanguageCode::ROMANIAN);
        $this->setCurrencies(new Collection([CurrencyCode::MDL,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_CHISINAU,]));
        $this->setLanguages(new Collection([LanguageCode::ROMANIAN,]));
    }
}
