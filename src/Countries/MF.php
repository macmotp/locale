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
 * Saint Martin
 */
final class MF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::SAINT_MARTIN);
        $this->setCapital('Marigot');
        $this->setCode(Country::MF);
        $this->setAlpha3Code('MFR');
        $this->setDialCode('+590');
        $this->setTld('.mf');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::AMERICA_MARIGOT);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_MARIGOT,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
