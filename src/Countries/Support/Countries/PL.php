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
 * Poland
 */
final class PL extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::POLAND);
        $this->setCapital(CountryCapital::WARSAW);
        $this->setCode(CountryCode::PL);
        $this->setAlpha3Code('POL');
        $this->setDialCode('+48');
        $this->setTld('.pl');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PL);
        $this->setDefaultCurrency(CurrencyCode::PLN);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_WARSAW);
        $this->setDefaultLanguage(LanguageCode::POLISH);
        $this->setCurrencies(new Collection([CurrencyCode::PLN,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_WARSAW,]));
        $this->setLanguages(new Collection([LanguageCode::POLISH,]));
    }
}
