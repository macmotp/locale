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
 *  French Guiana
 */
final class GF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::FRENCH_GUIANA);
        $this->setCapital('Cayenne');
        $this->setCode(Country::GF);
        $this->setAlpha3Code('GUF');
        $this->setDialCode('+594');
        $this->setTld('.guy');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::AMERICA_CAYENNE);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_CAYENNE,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
