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
 * Czechia
 */
final class CZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::CZECHIA);
        $this->setCapital(CountryCapital::PRAGUE);
        $this->setCode(CountryCode::CZ);
        $this->setAlpha3Code('CZE');
        $this->setDialCode('+420');
        $this->setTld('.cz');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CZ);
        $this->setDefaultCurrency(CurrencyCode::CZK);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_PRAGUE);
        $this->setDefaultLanguage(LanguageCode::CZECH);
        $this->setCurrencies(new Collection([CurrencyCode::CZK,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_PRAGUE,]));
        $this->setLanguages(new Collection([LanguageCode::CZECH,]));
    }
}
