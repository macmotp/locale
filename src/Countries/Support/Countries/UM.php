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
 * U.S. Minor Outlying Islands
 */
final class UM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::US_MINOR_OUTLYING_ISLANDS);
        $this->setCapital(CountryCapital::NA);
        $this->setCode(CountryCode::UM);
        $this->setAlpha3Code('UMI');
        $this->setDialCode('+1');
        $this->setTld('.um');
        $this->setDateFormat('m-d-Y');
        $this->setFlag(CountryFlag::UM);
        $this->setDefaultCurrency(CurrencyCode::USD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_WAKE);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::USD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_MIDWAY, TimezoneCode::PACIFIC_WAKE,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
