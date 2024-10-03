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
 * Uzbekistan
 */
final class UZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::UZBEKISTAN);
        $this->setCapital(CountryCapital::TASHKENT);
        $this->setCode(CountryCode::UZ);
        $this->setAlpha3Code('UZB');
        $this->setDialCode('+998');
        $this->setTld('.uz');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::UZ);
        $this->setDefaultCurrency(CurrencyCode::UZS);
        $this->setDefaultTimezone(TimezoneCode::ASIA_TASHKENT);
        $this->setDefaultLanguage(LanguageCode::UZBEK);
        $this->setCurrencies(new Collection([CurrencyCode::UZS,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_SAMARKAND, TimezoneCode::ASIA_TASHKENT,]));
        $this->setLanguages(new Collection([LanguageCode::UZBEK,]));
    }
}
