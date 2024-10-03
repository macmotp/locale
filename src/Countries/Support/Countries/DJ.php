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
 * Djibouti
 */
final class DJ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::DJIBOUTI);
        $this->setCapital(CountryCapital::DJIBOUTI_CITY);
        $this->setCode(CountryCode::DJ);
        $this->setAlpha3Code('DJI');
        $this->setDialCode('+253');
        $this->setTld('.dj');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::DJ);
        $this->setDefaultCurrency(CurrencyCode::DJF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_DJIBOUTI);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::DJF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_DJIBOUTI,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC, LanguageCode::FRENCH,]));
    }
}
