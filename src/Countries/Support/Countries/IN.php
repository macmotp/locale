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
 * India
 */
final class IN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::INDIA);
        $this->setCapital(CountryCapital::NEW_DELHI);
        $this->setCode(CountryCode::IN);
        $this->setAlpha3Code('IND');
        $this->setDialCode('+91');
        $this->setTld('.in');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::IN);
        $this->setDefaultCurrency(CurrencyCode::INR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_KOLKATA);
        $this->setDefaultLanguage(LanguageCode::HINDI);
        $this->setCurrencies(new Collection([CurrencyCode::INR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_KOLKATA,]));
        $this->setLanguages(new Collection([
            LanguageCode::ASSAMESE,
            LanguageCode::BENGALI,
            LanguageCode::ENGLISH,
            LanguageCode::GUJARATI,
            LanguageCode::HINDI,
            LanguageCode::NEPALI,
            LanguageCode::PUNJABI,
            LanguageCode::TAMIL,
            LanguageCode::URDU,
        ]));
    }
}
