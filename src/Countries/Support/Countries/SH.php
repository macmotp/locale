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
 * Saint Helena
 */
final class SH extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SAINT_HELENA);
        $this->setCapital(CountryCapital::JAMESTOWN);
        $this->setCode(CountryCode::SH);
        $this->setAlpha3Code('SHN');
        $this->setDialCode('+290');
        $this->setTld('.sh');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SH);
        $this->setDefaultCurrency(CurrencyCode::SHP);
        $this->setDefaultTimezone(TimezoneCode::ATLANTIC_ST_HELENA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::SHP,]));
        $this->setTimezones(new Collection([TimezoneCode::ATLANTIC_ST_HELENA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
