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
 * Åland
 */
final class AX extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::ALAND);
        $this->setCapital(CountryCapital::MARIEHAMN);
        $this->setCode(CountryCode::AX);
        $this->setAlpha3Code('ALA');
        $this->setDialCode('+358');
        $this->setTld('.ax');
        $this->setDateFormat('d.m.Y');
        $this->setFlag(CountryFlag::AX);
        $this->setDefaultCurrency(CurrencyCode::EUR);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_MARIEHAMN);
        $this->setDefaultLanguage(LanguageCode::SWEDISH);
        $this->setCurrencies(new Collection([CurrencyCode::EUR,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_MARIEHAMN,]));
        $this->setLanguages(new Collection([LanguageCode::SWEDISH,]));
    }
}
