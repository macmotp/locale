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
 * Azerbaijan
 */
final class AZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::AZERBAIJAN);
        $this->setCapital(CountryCapital::BAKU);
        $this->setCode(CountryCode::AZ);
        $this->setAlpha3Code('AZE');
        $this->setDialCode('+994');
        $this->setTld('.az');
        $this->setDateFormat('d.m.Y');
        $this->setFlag(CountryFlag::AZ);
        $this->setDefaultCurrency(CurrencyCode::AZN);
        $this->setDefaultTimezone(TimezoneCode::ASIA_BAKU);
        $this->setDefaultLanguage(LanguageCode::AZERBAIJANI);
        $this->setCurrencies(new Collection([CurrencyCode::AZN,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_BAKU,]));
        $this->setLanguages(new Collection([LanguageCode::AZERBAIJANI,]));
    }
}
