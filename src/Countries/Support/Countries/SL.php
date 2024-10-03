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
 * Sierra Leone
 */
final class SL extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SIERRA_LEONE);
        $this->setCapital(CountryCapital::FREETOWN);
        $this->setCode(CountryCode::SL);
        $this->setAlpha3Code('SLE');
        $this->setDialCode('+232');
        $this->setTld('.sl');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SL);
        $this->setDefaultCurrency(CurrencyCode::SLE);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_FREETOWN);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::SLE,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_FREETOWN,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
