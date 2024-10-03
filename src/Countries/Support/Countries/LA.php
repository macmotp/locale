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
 * Laos
 */
final class LA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::LAOS);
        $this->setCapital(CountryCapital::VIENTIANE);
        $this->setCode(CountryCode::LA);
        $this->setAlpha3Code('LAO');
        $this->setDialCode('+856');
        $this->setTld('.la');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LA);
        $this->setDefaultCurrency(CurrencyCode::LAK);
        $this->setDefaultTimezone(TimezoneCode::ASIA_VIENTIANE);
        $this->setDefaultLanguage(LanguageCode::LAO);
        $this->setCurrencies(new Collection([CurrencyCode::LAK,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_VIENTIANE,]));
        $this->setLanguages(new Collection([LanguageCode::LAO,]));
    }
}
