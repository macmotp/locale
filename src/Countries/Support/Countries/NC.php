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
 * New Caledonia
 */
final class NC extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::NEW_CALEDONIA);
        $this->setCapital(CountryCapital::NOUMEA);
        $this->setCode(CountryCode::NC);
        $this->setAlpha3Code('NCL');
        $this->setDialCode('+687');
        $this->setTld('.nc');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::NC);
        $this->setDefaultCurrency(CurrencyCode::XPF);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_NOUMEA);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XPF,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_NOUMEA,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
