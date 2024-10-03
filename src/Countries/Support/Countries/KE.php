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
 * Kenya
 */
final class KE extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::KENYA);
        $this->setCapital(CountryCapital::NAIROBI);
        $this->setCode(CountryCode::KE);
        $this->setAlpha3Code('KEN');
        $this->setDialCode('+254');
        $this->setTld('.ke');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KE);
        $this->setDefaultCurrency(CurrencyCode::KES);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_NAIROBI);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::KES,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_NAIROBI,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::SWAHILI,]));
    }
}
