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
 * Pakistan
 */
final class PK extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::PAKISTAN);
        $this->setCapital(CountryCapital::ISLAMABAD);
        $this->setCode(CountryCode::PK);
        $this->setAlpha3Code('PAK');
        $this->setDialCode('+92');
        $this->setTld('.pk');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PK);
        $this->setDefaultCurrency(CurrencyCode::PKR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_KARACHI);
        $this->setDefaultLanguage(LanguageCode::URDU);
        $this->setCurrencies(new Collection([CurrencyCode::PKR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_KARACHI,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::URDU,]));
    }
}
