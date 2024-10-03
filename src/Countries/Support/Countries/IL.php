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
 * Israel
 */
final class IL extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::ISRAEL);
        $this->setCapital(CountryCapital::JERUSALEM);
        $this->setCode(CountryCode::IL);
        $this->setAlpha3Code('ISR');
        $this->setDialCode('+972');
        $this->setTld('.il');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::IL);
        $this->setDefaultCurrency(CurrencyCode::ILS);
        $this->setDefaultTimezone(TimezoneCode::ASIA_JERUSALEM);
        $this->setDefaultLanguage(LanguageCode::HEBREW);
        $this->setCurrencies(new Collection([CurrencyCode::ILS,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_JERUSALEM,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC, LanguageCode::HEBREW,]));
    }
}
