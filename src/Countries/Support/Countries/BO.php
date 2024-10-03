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
 * Bolivia
 */
final class BO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::BOLIVIA);
        $this->setCapital(CountryCapital::SUCRE);
        $this->setCode(CountryCode::BO);
        $this->setAlpha3Code('BOL');
        $this->setDialCode('+591');
        $this->setTld('.bo');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::BO);
        $this->setDefaultCurrency(CurrencyCode::BOB);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_LA_PAZ);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::BOB,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_LA_PAZ,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
