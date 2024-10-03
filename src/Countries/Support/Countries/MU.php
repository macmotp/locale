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
 * Mauritius
 */
final class MU extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::MAURITIUS);
        $this->setCapital(CountryCapital::PORT_LOUIS);
        $this->setCode(CountryCode::MU);
        $this->setAlpha3Code('MUS');
        $this->setDialCode('+230');
        $this->setTld('.mu');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MU);
        $this->setDefaultCurrency(CurrencyCode::MUR);
        $this->setDefaultTimezone(TimezoneCode::INDIAN_MAURITIUS);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::MUR,]));
        $this->setTimezones(new Collection([TimezoneCode::INDIAN_MAURITIUS,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::FRENCH,]));
    }
}
