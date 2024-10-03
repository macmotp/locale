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
 * Belarus
 */
final class BY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::BELARUS);
        $this->setCapital(CountryCapital::MINSK);
        $this->setCode(CountryCode::BY);
        $this->setAlpha3Code('BLR');
        $this->setDialCode('+375');
        $this->setTld('.by');
        $this->setDateFormat('d.m.Y');
        $this->setFlag(CountryFlag::BY);
        $this->setDefaultCurrency(CurrencyCode::BYN);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_MINSK);
        $this->setDefaultLanguage(LanguageCode::BELARUSIAN);
        $this->setCurrencies(new Collection([CurrencyCode::BYN,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_MINSK,]));
        $this->setLanguages(new Collection([LanguageCode::BELARUSIAN, LanguageCode::RUSSIAN,]));
    }
}
