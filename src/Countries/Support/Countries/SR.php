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
 * Suriname
 */
final class SR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::SURINAME);
        $this->setCapital(CountryCapital::PARAMARIBO);
        $this->setCode(CountryCode::SR);
        $this->setAlpha3Code('SUR');
        $this->setDialCode('+597');
        $this->setTld('.sr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SR);
        $this->setDefaultCurrency(CurrencyCode::SRD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_PARAMARIBO);
        $this->setDefaultLanguage(LanguageCode::DUTCH);
        $this->setCurrencies(new Collection([CurrencyCode::SRD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_PARAMARIBO,]));
        $this->setLanguages(new Collection([LanguageCode::DUTCH,]));
    }
}
