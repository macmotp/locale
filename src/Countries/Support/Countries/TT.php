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
 * Trinidad and Tobago
 */
final class TT extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::TRINIDAD_AND_TOBAGO);
        $this->setCapital(CountryCapital::PORT_OF_SPAIN);
        $this->setCode(CountryCode::TT);
        $this->setAlpha3Code('TTO');
        $this->setDialCode('+1868');
        $this->setTld('.tt');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TT);
        $this->setDefaultCurrency(CurrencyCode::TTD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_PORT_OF_SPAIN);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::TTD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_PORT_OF_SPAIN,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
