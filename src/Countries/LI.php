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
 * Liechtenstein
 */
final class LI extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::LIECHTENSTEIN);
        $this->setCapital('Vaduz');
        $this->setCode(Country::LI);
        $this->setAlpha3Code('LIE');
        $this->setDialCode('+423');
        $this->setTld('.li');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::CHF);
        $this->setDefaultTimezone(Timezone::EUROPE_VADUZ);
        $this->setDefaultLanguage(Language::GERMAN);
        $this->setCurrencies(new Collection([Currency::CHF,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_VADUZ,]));
        $this->setLanguages(new Collection([Language::GERMAN,]));
    }
}
