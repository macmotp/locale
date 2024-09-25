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
 *  France
 */
final class FR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::FRANCE);
        $this->setCapital('Paris');
        $this->setCode(Country::FR);
        $this->setAlpha3Code('FRA');
        $this->setDialCode('+33');
        $this->setTld('.fr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_PARIS);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_PARIS,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
