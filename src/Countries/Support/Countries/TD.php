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
 * Chad
 */
final class TD extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::CHAD);
        $this->setCapital(CountryCapital::NDJAMENA);
        $this->setCode(CountryCode::TD);
        $this->setAlpha3Code('TCD');
        $this->setDialCode('+235');
        $this->setTld('.td');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TD);
        $this->setDefaultCurrency(CurrencyCode::XAF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_NDJAMENA);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XAF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_NDJAMENA,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
