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
 * Cayman Islands
 */
final class KY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::CAYMAN_ISLANDS);
        $this->setCapital(CountryCapital::GEORGE_TOWN);
        $this->setCode(CountryCode::KY);
        $this->setAlpha3Code('CYM');
        $this->setDialCode('+345');
        $this->setTld('.ky');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KY);
        $this->setDefaultCurrency(CurrencyCode::KYD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_CAYMAN);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::KYD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_CAYMAN,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
