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
 * Bangladesh
 */
final class BD extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::BANGLADESH);
        $this->setCapital(CountryCapital::DHAKA);
        $this->setCode(CountryCode::BD);
        $this->setAlpha3Code('BGD');
        $this->setDialCode('+880');
        $this->setTld('.bd');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::BD);
        $this->setDefaultCurrency(CurrencyCode::BDT);
        $this->setDefaultTimezone(TimezoneCode::ASIA_DHAKA);
        $this->setDefaultLanguage(LanguageCode::BENGALI);
        $this->setCurrencies(new Collection([CurrencyCode::BDT,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_DHAKA,]));
        $this->setLanguages(new Collection([LanguageCode::BENGALI,]));
    }
}
