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
 * Cape Verde
 */
final class CV extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::CAPE_VERDE);
        $this->setCapital(CountryCapital::PRAIA);
        $this->setCode(CountryCode::CV);
        $this->setAlpha3Code('CPV');
        $this->setDialCode('+238');
        $this->setTld('.cv');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CV);
        $this->setDefaultCurrency(CurrencyCode::CVE);
        $this->setDefaultTimezone(TimezoneCode::ATLANTIC_CAPE_VERDE);
        $this->setDefaultLanguage(LanguageCode::PORTUGUESE);
        $this->setCurrencies(new Collection([CurrencyCode::CVE,]));
        $this->setTimezones(new Collection([TimezoneCode::ATLANTIC_CAPE_VERDE,]));
        $this->setLanguages(new Collection([LanguageCode::PORTUGUESE,]));
    }
}
