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
 * Cook Islands
 */
final class CK extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::COOK_ISLANDS);
        $this->setCapital(CountryCapital::AVARUA);
        $this->setCode(CountryCode::CK);
        $this->setAlpha3Code('COK');
        $this->setDialCode('+682');
        $this->setTld('.ck');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CK);
        $this->setDefaultCurrency(CurrencyCode::NZD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_RAROTONGA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::NZD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_RAROTONGA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
