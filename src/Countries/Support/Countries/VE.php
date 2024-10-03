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
 * Venezuela
 */
final class VE extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::VENEZUELA);
        $this->setCapital(CountryCapital::CARACAS);
        $this->setCode(CountryCode::VE);
        $this->setAlpha3Code('VEN');
        $this->setDialCode('+58');
        $this->setTld('.ve');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::VE);
        $this->setDefaultCurrency(CurrencyCode::VES);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_CARACAS);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::VES,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_CARACAS,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
