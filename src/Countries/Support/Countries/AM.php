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
 * Armenia
 */
final class AM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::ARMENIA);
        $this->setCapital(CountryCapital::YEREVAN);
        $this->setCode(CountryCode::AM);
        $this->setAlpha3Code('ARM');
        $this->setDialCode('+374');
        $this->setTld('.am');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::AM);
        $this->setDefaultCurrency(CurrencyCode::AMD);
        $this->setDefaultTimezone(TimezoneCode::ASIA_YEREVAN);
        $this->setDefaultLanguage(LanguageCode::ARMENIAN);
        $this->setCurrencies(new Collection([CurrencyCode::AMD,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_YEREVAN,]));
        $this->setLanguages(new Collection([LanguageCode::ARMENIAN,]));
    }
}
