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
 *  Guadeloupe
 */
final class GP extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::GUADELOUPE);
        $this->setCapital('Basse-Terre');
        $this->setCode(Country::GP);
        $this->setAlpha3Code('GLP');
        $this->setDialCode('+590');
        $this->setTld('.gp');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::AMERICA_GUADELOUPE);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_GUADELOUPE,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
