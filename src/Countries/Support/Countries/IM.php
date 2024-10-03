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
 * Isle of Man
 */
final class IM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::ISLE_OF_MAN);
        $this->setCapital(CountryCapital::DOUGLAS);
        $this->setCode(CountryCode::IM);
        $this->setAlpha3Code('IMN');
        $this->setDialCode('+44');
        $this->setTld('.im');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::IM);
        $this->setDefaultCurrency(CurrencyCode::GBP);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_LONDON);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::GBP,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_LONDON,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
