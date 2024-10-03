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
 * Colombia
 */
final class CO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::COLOMBIA);
        $this->setCapital(CountryCapital::BOGOTA);
        $this->setCode(CountryCode::CO);
        $this->setAlpha3Code('COL');
        $this->setDialCode('+57');
        $this->setTld('.co');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CO);
        $this->setDefaultCurrency(CurrencyCode::COP);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_BOGOTA);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::COP,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_BOGOTA,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
