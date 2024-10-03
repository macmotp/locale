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
 * Fiji
 */
final class FJ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::FIJI);
        $this->setCapital(CountryCapital::SUVA);
        $this->setCode(CountryCode::FJ);
        $this->setAlpha3Code('FJI');
        $this->setDialCode('+679');
        $this->setTld('.fj');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::FJ);
        $this->setDefaultCurrency(CurrencyCode::FJD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_FIJI);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::FJD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_FIJI,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
