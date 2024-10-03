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
 * Denmark
 */
final class DK extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::DENMARK);
        $this->setCapital(CountryCapital::COPENHAGEN);
        $this->setCode(CountryCode::DK);
        $this->setAlpha3Code('DNK');
        $this->setDialCode('+45');
        $this->setTld('.dk');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::DK);
        $this->setDefaultCurrency(CurrencyCode::DKK);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_COPENHAGEN);
        $this->setDefaultLanguage(LanguageCode::DANISH);
        $this->setCurrencies(new Collection([CurrencyCode::DKK,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_COPENHAGEN,]));
        $this->setLanguages(new Collection([LanguageCode::DANISH,]));
    }
}
