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
 * Brunei
 */
final class BN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::BRUNEI);
        $this->setCapital(CountryCapital::BANDAR_SERI_BEGAWAN);
        $this->setCode(CountryCode::BN);
        $this->setAlpha3Code('BRN');
        $this->setDialCode('+673');
        $this->setTld('.bn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::BN);
        $this->setDefaultCurrency(CurrencyCode::BND);
        $this->setDefaultTimezone(TimezoneCode::ASIA_BRUNEI);
        $this->setDefaultLanguage(LanguageCode::MALAY);
        $this->setCurrencies(new Collection([
            CurrencyCode::BND,
            CurrencyCode::SGD,
        ]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_BRUNEI,]));
        $this->setLanguages(new Collection([LanguageCode::MALAY,]));
    }
}
