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
 * Honduras
 */
final class HN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::HONDURAS);
        $this->setCapital(CountryCapital::TEGUCIGALPA);
        $this->setCode(CountryCode::HN);
        $this->setAlpha3Code('HND');
        $this->setDialCode('+504');
        $this->setTld('.hn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::HN);
        $this->setDefaultCurrency(CurrencyCode::HNL);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_TEGUCIGALPA);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::HNL,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_TEGUCIGALPA,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
