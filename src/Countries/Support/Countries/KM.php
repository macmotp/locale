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
 * Comoros
 */
final class KM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::COMOROS);
        $this->setCapital(CountryCapital::MORONI);
        $this->setCode(CountryCode::KM);
        $this->setAlpha3Code('COM');
        $this->setDialCode('+269');
        $this->setTld('.km');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KM);
        $this->setDefaultCurrency(CurrencyCode::KMF);
        $this->setDefaultTimezone(TimezoneCode::INDIAN_COMORO);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::KMF,]));
        $this->setTimezones(new Collection([TimezoneCode::INDIAN_COMORO,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC, LanguageCode::FRENCH,]));
    }
}
