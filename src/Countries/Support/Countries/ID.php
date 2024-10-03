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
 * Indonesia
 */
final class ID extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::INDONESIA);
        $this->setCapital(CountryCapital::JAKARTA);
        $this->setCode(CountryCode::ID);
        $this->setAlpha3Code('IDN');
        $this->setDialCode('+62');
        $this->setTld('.id');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::ID);
        $this->setDefaultCurrency(CurrencyCode::IDR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_JAKARTA);
        $this->setDefaultLanguage(LanguageCode::INDONESIAN);
        $this->setCurrencies(new Collection([CurrencyCode::IDR,]));
        $this->setTimezones(new Collection([
            TimezoneCode::ASIA_JAKARTA,
            TimezoneCode::ASIA_JAYAPURA,
            TimezoneCode::ASIA_MAKASSAR,
            TimezoneCode::ASIA_PONTIANAK,
        ]));
        $this->setLanguages(new Collection([LanguageCode::INDONESIAN,]));
    }
}