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
 * Guyana
 */
final class GY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::GUYANA);
        $this->setCapital(CountryCapital::GEORGETOWN);
        $this->setCode(CountryCode::GY);
        $this->setAlpha3Code('GUY');
        $this->setDialCode('+592');
        $this->setTld('.gy');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GY);
        $this->setDefaultCurrency(CurrencyCode::GYD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_GUYANA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::GYD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_GUYANA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
