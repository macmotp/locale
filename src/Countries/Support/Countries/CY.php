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
 * Cyprus
 */
final class CY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::CYPRUS);
        $this->setCapital(CountryCapital::NICOSIA);
        $this->setCode(CountryCode::CY);
        $this->setAlpha3Code('CYP');
        $this->setDialCode('+357');
        $this->setTld('.cy');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CY);
        $this->setDefaultCurrency(CurrencyCode::EUR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_NICOSIA);
        $this->setDefaultLanguage(LanguageCode::GREEK);
        $this->setCurrencies(new Collection([CurrencyCode::EUR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_FAMAGUSTA, TimezoneCode::ASIA_NICOSIA,]));
        $this->setLanguages(new Collection([LanguageCode::GREEK, LanguageCode::TURKISH,]));
    }
}
