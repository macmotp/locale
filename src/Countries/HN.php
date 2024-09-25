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
 *  Honduras
 */
final class HN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::HONDURAS);
        $this->setCapital('Tegucigalpa');
        $this->setCode(Country::HN);
        $this->setAlpha3Code('HND');
        $this->setDialCode('+504');
        $this->setTld('.hn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::HNL);
        $this->setDefaultTimezone(Timezone::AMERICA_TEGUCIGALPA);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::HNL,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_TEGUCIGALPA,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
