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
 * Åland
 */
final class AX extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::ALAND);
        $this->setCapital('Mariehamn');
        $this->setCode(Country::AX);
        $this->setAlpha3Code('ALA');
        $this->setDialCode('+358');
        $this->setTld('.ax');
        $this->setDateFormat('d.m.Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_MARIEHAMN);
        $this->setDefaultLanguage(Language::SWEDISH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_MARIEHAMN,]));
        $this->setLanguages(new Collection([Language::SWEDISH,]));
    }
}
