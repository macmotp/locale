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
 * Bhutan
 */
final class BT extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::BHUTAN);
        $this->setCapital(CountryCapital::THIMPHU);
        $this->setCode(CountryCode::BT);
        $this->setAlpha3Code('BTN');
        $this->setDialCode('+975');
        $this->setTld('.bt');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::BT);
        $this->setDefaultCurrency(CurrencyCode::BTN);
        $this->setDefaultTimezone(TimezoneCode::ASIA_THIMPHU);
        $this->setDefaultLanguage(LanguageCode::DZONGKHA);
        $this->setCurrencies(new Collection([CurrencyCode::BTN, CurrencyCode::INR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_THIMPHU,]));
        $this->setLanguages(new Collection([LanguageCode::DZONGKHA,]));
    }
}
