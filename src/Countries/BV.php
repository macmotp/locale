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
 *  Bouvet Island
 */
final class BV extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ANTARCTICA);
        $this->setName(Country::BOUVET_ISLAND);
        $this->setCapital('None');
        $this->setCode(Country::BV);
        $this->setAlpha3Code('BVT');
        $this->setDialCode('+47');
        $this->setTld('.bv');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::NOK);
        $this->setDefaultTimezone(Timezone::EUROPE_OSLO);
        $this->setDefaultLanguage(Language::NORWEGIAN);
        $this->setCurrencies(new Collection([Currency::NOK,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_OSLO,]));
        $this->setLanguages(new Collection([Language::NORWEGIAN,]));
    }
}
