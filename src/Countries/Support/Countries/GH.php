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
 * Ghana
 */
final class GH extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::GHANA);
        $this->setCapital(CountryCapital::ACCRA);
        $this->setCode(CountryCode::GH);
        $this->setAlpha3Code('GHA');
        $this->setDialCode('+233');
        $this->setTld('.gh');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GH);
        $this->setDefaultCurrency(CurrencyCode::GHS);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_ACCRA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::GHS,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_ACCRA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
