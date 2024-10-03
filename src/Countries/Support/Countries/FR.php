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
 * France
 */
final class FR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::FRANCE);
        $this->setCapital(CountryCapital::PARIS);
        $this->setCode(CountryCode::FR);
        $this->setAlpha3Code('FRA');
        $this->setDialCode('+33');
        $this->setTld('.fr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::FR);
        $this->setDefaultCurrency(CurrencyCode::EUR);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_PARIS);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::EUR,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_PARIS,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
