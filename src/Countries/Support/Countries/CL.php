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
 * Chile
 */
final class CL extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::CHILE);
        $this->setCapital(CountryCapital::SANTIAGO);
        $this->setCode(CountryCode::CL);
        $this->setAlpha3Code('CHL');
        $this->setDialCode('+56');
        $this->setTld('.cl');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CL);
        $this->setDefaultCurrency(CurrencyCode::CLP);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_SANTIAGO);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::CLP,]));
        $this->setTimezones(new Collection([
            TimezoneCode::AMERICA_PUNTA_ARENAS,
            TimezoneCode::AMERICA_SANTIAGO,
            TimezoneCode::PACIFIC_EASTER,
        ]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
