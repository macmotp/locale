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
 * Tonga
 */
final class TO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::TONGA);
        $this->setCapital(CountryCapital::NUKUALOFA);
        $this->setCode(CountryCode::TO);
        $this->setAlpha3Code('TON');
        $this->setDialCode('+676');
        $this->setTld('.to');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TO);
        $this->setDefaultCurrency(CurrencyCode::TOP);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_TONGATAPU);
        $this->setDefaultLanguage(LanguageCode::TONGAN);
        $this->setCurrencies(new Collection([CurrencyCode::TOP,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_TONGATAPU,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::TONGAN,]));
    }
}
