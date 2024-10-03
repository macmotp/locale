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
 * Puerto Rico
 */
final class PR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::PUERTO_RICO);
        $this->setCapital(CountryCapital::SAN_JUAN);
        $this->setCode(CountryCode::PR);
        $this->setAlpha3Code('PRI');
        $this->setDialCode('+1787');
        $this->setTld('.pr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PR);
        $this->setDefaultCurrency(CurrencyCode::USD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_PUERTO_RICO);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::USD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_PUERTO_RICO,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::SPANISH,]));
    }
}
