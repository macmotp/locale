<?php

namespace Macmotp\Countries;

use Macmotp\Continent;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Country;
use Macmotp\Currency;
use Macmotp\Language;
use Macmotp\Timezone;

/**
 *  Dominican Republic
 */
final class DO_ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::DOMINICAN_REPUBLIC);
        $this->setCapital('Santo Domingo');
        $this->setCode(Country::DO);
        $this->setAlpha3Code('DOM');
        $this->setDialCode('+1809');
        $this->setTld('.do');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::DOP);
        $this->setDefaultTimezone(Timezone::AMERICA_SANTO_DOMINGO);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::DOP,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_SANTO_DOMINGO,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
