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
 * Central African Republic
 */
final class CF extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::CENTRAL_AFRICAN_REPUBLIC);
        $this->setCapital(CountryCapital::BANGUI);
        $this->setCode(CountryCode::CF);
        $this->setAlpha3Code('CAF');
        $this->setDialCode('+236');
        $this->setTld('.cf');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::CF);
        $this->setDefaultCurrency(CurrencyCode::XAF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_BANGUI);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XAF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_BANGUI,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
