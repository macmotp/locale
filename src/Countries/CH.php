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
 *  Switzerland
 */
final class CH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::SWITZERLAND);
        $this->setCapital('Bern');
        $this->setCode(Country::CH);
        $this->setAlpha3Code('CHE');
        $this->setDialCode('+41');
        $this->setTld('.ch');
        $this->setDateFormat('d.m.Y');
        $this->setDefaultCurrency(Currency::CHF);
        $this->setDefaultTimezone(Timezone::EUROPE_ZURICH);
        $this->setDefaultLanguage(Language::GERMAN);
        $this->setCurrencies(new Collection([Currency::CHF,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_ZURICH,]));
        $this->setLanguages(new Collection([
            Language::FRENCH,
            Language::GERMAN,
            Language::ITALIAN,
            Language::ROMANSCH,
        ]));
    }
}
