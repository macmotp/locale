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
 * Germany
 */
final class DE extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::GERMANY);
        $this->setCapital(CountryCapital::BERLIN);
        $this->setCode(CountryCode::DE);
        $this->setAlpha3Code('DEU');
        $this->setDialCode('+49');
        $this->setTld('.de');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::DE);
        $this->setDefaultCurrency(CurrencyCode::EUR);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_BERLIN);
        $this->setDefaultLanguage(LanguageCode::GERMAN);
        $this->setCurrencies(new Collection([CurrencyCode::EUR,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_BERLIN,]));
        $this->setLanguages(new Collection([LanguageCode::GERMAN,]));
    }
}
