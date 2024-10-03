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
 * Hong Kong
 */
final class HK extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::HONG_KONG);
        $this->setCapital(CountryCapital::HONG_KONG);
        $this->setCode(CountryCode::HK);
        $this->setAlpha3Code('HKG');
        $this->setDialCode('+852');
        $this->setTld('.hk');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::HK);
        $this->setDefaultCurrency(CurrencyCode::HKD);
        $this->setDefaultTimezone(TimezoneCode::ASIA_HONG_KONG);
        $this->setDefaultLanguage(LanguageCode::CANTONESE);
        $this->setCurrencies(new Collection([CurrencyCode::HKD,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_HONG_KONG,]));
        $this->setLanguages(new Collection([LanguageCode::CANTONESE, LanguageCode::CHINESE,]));
    }
}
