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
 * Haiti
 */
final class HT extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::HAITI);
        $this->setCapital(CountryCapital::PORT_AU_PRINCE);
        $this->setCode(CountryCode::HT);
        $this->setAlpha3Code('HTI');
        $this->setDialCode('+509');
        $this->setTld('.ht');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::HT);
        $this->setDefaultCurrency(CurrencyCode::HTG);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_PORT_AU_PRINCE);
        $this->setDefaultLanguage(LanguageCode::HAITIAN_CREOLE);
        $this->setCurrencies(new Collection([CurrencyCode::HTG,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_PORT_AU_PRINCE,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH, LanguageCode::HAITIAN_CREOLE,]));
    }
}
