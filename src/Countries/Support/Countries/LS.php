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
 * Lesotho
 */
final class LS extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::LESOTHO);
        $this->setCapital(CountryCapital::MASERU);
        $this->setCode(CountryCode::LS);
        $this->setAlpha3Code('LSO');
        $this->setDialCode('+266');
        $this->setTld('.ls');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LS);
        $this->setDefaultCurrency(CurrencyCode::LSL);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_MASERU);
        $this->setDefaultLanguage(LanguageCode::SESOTHO);
        $this->setCurrencies(new Collection([CurrencyCode::LSL,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_MASERU,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::SESOTHO,]));
    }
}
