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
 * Heard Island and McDonald Islands
 */
final class HM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ANTARCTICA);
        $this->setName(CountryName::HEARD_ISLAND_AND_MCDONALD_ISLANDS);
        $this->setCapital(CountryCapital::NA);
        $this->setCode(CountryCode::HM);
        $this->setAlpha3Code('HMD');
        $this->setDialCode('+672');
        $this->setTld('.hm');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::HM);
        $this->setDefaultCurrency(CurrencyCode::AUD);
        $this->setDefaultTimezone(TimezoneCode::INDIAN_MALDIVES);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::AUD,]));
        $this->setTimezones(new Collection([TimezoneCode::INDIAN_MALDIVES,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
