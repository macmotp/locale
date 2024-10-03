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
 * Tokelau
 */
final class TK extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::TOKELAU);
        $this->setCapital(CountryCapital::FAKAOFO);
        $this->setCode(CountryCode::TK);
        $this->setAlpha3Code('TKL');
        $this->setDialCode('+690');
        $this->setTld('.tk');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TK);
        $this->setDefaultCurrency(CurrencyCode::NZD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_FAKAOFO);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::NZD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_FAKAOFO,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::TOKELAUAN,]));
    }
}
