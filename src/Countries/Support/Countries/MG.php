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
 * Madagascar
 */
final class MG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::MADAGASCAR);
        $this->setCapital(CountryCapital::ANTANANARIVO);
        $this->setCode(CountryCode::MG);
        $this->setAlpha3Code('MDG');
        $this->setDialCode('+261');
        $this->setTld('.mg');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MG);
        $this->setDefaultCurrency(CurrencyCode::MGA);
        $this->setDefaultTimezone(TimezoneCode::INDIAN_ANTANANARIVO);
        $this->setDefaultLanguage(LanguageCode::MALAGASY);
        $this->setCurrencies(new Collection([CurrencyCode::MGA,]));
        $this->setTimezones(new Collection([TimezoneCode::INDIAN_ANTANANARIVO,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH, LanguageCode::MALAGASY,]));
    }
}
