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
 * Nauru
 */
final class NR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::NAURU);
        $this->setCapital(CountryCapital::YAREN);
        $this->setCode(CountryCode::NR);
        $this->setAlpha3Code('NRU');
        $this->setDialCode('+674');
        $this->setTld('.nr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::NR);
        $this->setDefaultCurrency(CurrencyCode::AUD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_NAURU);
        $this->setDefaultLanguage(LanguageCode::NAURUAN);
        $this->setCurrencies(new Collection([CurrencyCode::AUD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_NAURU,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::NAURUAN,]));
    }
}
