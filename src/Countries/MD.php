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
 * Moldova
 */
final class MD extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::MOLDOVA);
        $this->setCapital('Chișinău');
        $this->setCode(Country::MD);
        $this->setAlpha3Code('MDA');
        $this->setDialCode('+373');
        $this->setTld('.md');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MDL);
        $this->setDefaultTimezone(Timezone::EUROPE_CHISINAU);
        $this->setDefaultLanguage(Language::ROMANIAN);
        $this->setCurrencies(new Collection([Currency::MDL,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_CHISINAU,]));
        $this->setLanguages(new Collection([Language::ROMANIAN,]));
    }
}
