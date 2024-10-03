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
 * Nicaragua
 */
final class NI extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::NICARAGUA);
        $this->setCapital(CountryCapital::MANAGUA);
        $this->setCode(CountryCode::NI);
        $this->setAlpha3Code('NIC');
        $this->setDialCode('+505');
        $this->setTld('.ni');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::NI);
        $this->setDefaultCurrency(CurrencyCode::NIO);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_MANAGUA);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::NIO,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_MANAGUA,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
