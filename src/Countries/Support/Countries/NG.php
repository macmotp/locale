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
 * Nigeria
 */
final class NG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::NIGERIA);
        $this->setCapital(CountryCapital::ABUJA);
        $this->setCode(CountryCode::NG);
        $this->setAlpha3Code('NGA');
        $this->setDialCode('+234');
        $this->setTld('.ng');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::NG);
        $this->setDefaultCurrency(CurrencyCode::NGN);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_LAGOS);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::NGN,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_LAGOS,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
