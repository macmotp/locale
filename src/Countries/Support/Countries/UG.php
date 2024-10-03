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
 * Uganda
 */
final class UG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::UGANDA);
        $this->setCapital(CountryCapital::KAMPALA);
        $this->setCode(CountryCode::UG);
        $this->setAlpha3Code('UGA');
        $this->setDialCode('+256');
        $this->setTld('.ug');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::UG);
        $this->setDefaultCurrency(CurrencyCode::UGX);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_KAMPALA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::UGX,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_KAMPALA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::SWAHILI,]));
    }
}
