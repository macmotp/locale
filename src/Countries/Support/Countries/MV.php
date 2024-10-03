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
 * Maldives
 */
final class MV extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::MALDIVES);
        $this->setCapital(CountryCapital::MALE);
        $this->setCode(CountryCode::MV);
        $this->setAlpha3Code('MDV');
        $this->setDialCode('+960');
        $this->setTld('.mv');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MV);
        $this->setDefaultCurrency(CurrencyCode::MVR);
        $this->setDefaultTimezone(TimezoneCode::INDIAN_MALDIVES);
        $this->setDefaultLanguage(LanguageCode::DHIVEHI);
        $this->setCurrencies(new Collection([CurrencyCode::MVR,]));
        $this->setTimezones(new Collection([TimezoneCode::INDIAN_MALDIVES,]));
        $this->setLanguages(new Collection([LanguageCode::DHIVEHI,]));
    }
}
