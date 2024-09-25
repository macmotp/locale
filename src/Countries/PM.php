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
 * Saint Pierre and Miquelon
 */
final class PM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::SAINT_PIERRE_AND_MIQUELON);
        $this->setCapital('Saint-Pierre');
        $this->setCode(Country::PM);
        $this->setAlpha3Code('SPM');
        $this->setDialCode('+508');
        $this->setTld('.pm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::AMERICA_MIQUELON);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_MIQUELON,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
