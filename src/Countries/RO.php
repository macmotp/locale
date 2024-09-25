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
 * Romania
 */
final class RO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::ROMANIA);
        $this->setCapital('Bucharest');
        $this->setCode(Country::RO);
        $this->setAlpha3Code('ROU');
        $this->setDialCode('+40');
        $this->setTld('.ro');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::RON);
        $this->setDefaultTimezone(Timezone::EUROPE_BUCHAREST);
        $this->setDefaultLanguage(Language::ROMANIAN);
        $this->setCurrencies(new Collection([Currency::RON,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_BUCHAREST,]));
        $this->setLanguages(new Collection([Language::ROMANIAN,]));
    }
}
