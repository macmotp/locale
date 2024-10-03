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
 * Sri Lanka
 */
final class LK extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::SRI_LANKA);
        $this->setCapital(CountryCapital::COLOMBO);
        $this->setCode(CountryCode::LK);
        $this->setAlpha3Code('LKA');
        $this->setDialCode('+94');
        $this->setTld('.lk');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LK);
        $this->setDefaultCurrency(CurrencyCode::LKR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_COLOMBO);
        $this->setDefaultLanguage(LanguageCode::SINHALA);
        $this->setCurrencies(new Collection([CurrencyCode::LKR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_COLOMBO,]));
        $this->setLanguages(new Collection([LanguageCode::SINHALA, LanguageCode::TAMIL,]));
    }
}
