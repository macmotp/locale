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
 * Turkey
 */
final class TR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::TURKEY);
        $this->setCapital(CountryCapital::ANKARA);
        $this->setCode(CountryCode::TR);
        $this->setAlpha3Code('TUR');
        $this->setDialCode('+90');
        $this->setTld('.tr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TR);
        $this->setDefaultCurrency(CurrencyCode::TRY);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_ISTANBUL);
        $this->setDefaultLanguage(LanguageCode::TURKISH);
        $this->setCurrencies(new Collection([CurrencyCode::TRY,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_ISTANBUL,]));
        $this->setLanguages(new Collection([LanguageCode::TURKISH,]));
    }
}
