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
 * Turks and Caicos Islands
 */
final class TC extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::TURKS_AND_CAICOS_ISLANDS);
        $this->setCapital('Cockburn Town');
        $this->setCode(Country::TC);
        $this->setAlpha3Code('TCA');
        $this->setDialCode('+1649');
        $this->setTld('.tc');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::AMERICA_GRAND_TURK);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_GRAND_TURK,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
