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
 * Puerto Rico
 */
final class PR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::PUERTO_RICO);
        $this->setCapital('San Juan');
        $this->setCode(Country::PR);
        $this->setAlpha3Code('PRI');
        $this->setDialCode('+1787');
        $this->setTld('.pr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::AMERICA_PUERTO_RICO);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_PUERTO_RICO,]));
        $this->setLanguages(new Collection([Language::SPANISH, Language::ENGLISH,]));
    }
}
