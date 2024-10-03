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
 * Romania
 */
final class RO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::ROMANIA);
        $this->setCapital(CountryCapital::BUCHAREST);
        $this->setCode(CountryCode::RO);
        $this->setAlpha3Code('ROU');
        $this->setDialCode('+40');
        $this->setTld('.ro');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::RO);
        $this->setDefaultCurrency(CurrencyCode::RON);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_BUCHAREST);
        $this->setDefaultLanguage(LanguageCode::ROMANIAN);
        $this->setCurrencies(new Collection([CurrencyCode::RON,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_BUCHAREST,]));
        $this->setLanguages(new Collection([LanguageCode::ROMANIAN,]));
    }
}
