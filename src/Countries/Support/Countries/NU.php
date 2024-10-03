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
 * Niue
 */
final class NU extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::NIUE);
        $this->setCapital(CountryCapital::ALOFI);
        $this->setCode(CountryCode::NU);
        $this->setAlpha3Code('NIU');
        $this->setDialCode('+683');
        $this->setTld('.nu');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::NU);
        $this->setDefaultCurrency(CurrencyCode::NZD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_NIUE);
        $this->setDefaultLanguage(LanguageCode::NIUEAN);
        $this->setCurrencies(new Collection([CurrencyCode::NZD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_NIUE,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::NIUEAN,]));
    }
}
