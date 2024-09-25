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
 *  Czechia
 */
final class CZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::CZECHIA);
        $this->setCapital('Prague');
        $this->setCode(Country::CZ);
        $this->setAlpha3Code('CZE');
        $this->setDialCode('+420');
        $this->setTld('.cz');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::CZK);
        $this->setDefaultTimezone(Timezone::EUROPE_PRAGUE);
        $this->setDefaultLanguage(Language::CZECH);
        $this->setCurrencies(new Collection([Currency::CZK,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_PRAGUE,]));
        $this->setLanguages(new Collection([Language::CZECH,]));
    }
}
