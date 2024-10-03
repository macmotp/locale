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
 * Rwanda
 */
final class RW extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::RWANDA);
        $this->setCapital(CountryCapital::KIGALI);
        $this->setCode(CountryCode::RW);
        $this->setAlpha3Code('RWA');
        $this->setDialCode('+250');
        $this->setTld('.rw');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::RW);
        $this->setDefaultCurrency(CurrencyCode::RWF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_KIGALI);
        $this->setDefaultLanguage(LanguageCode::KINYARWANDA);
        $this->setCurrencies(new Collection([CurrencyCode::RWF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_KIGALI,]));
        $this->setLanguages(new Collection([LanguageCode::KINYARWANDA,]));
    }
}
