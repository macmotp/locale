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
 *  Chile
 */
final class CL extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::CHILE);
        $this->setCapital('Santiago');
        $this->setCode(Country::CL);
        $this->setAlpha3Code('CHL');
        $this->setDialCode('+56');
        $this->setTld('.cl');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::CLP);
        $this->setDefaultTimezone(Timezone::AMERICA_SANTIAGO);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::CLP,]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_PUNTA_ARENAS,
            Timezone::AMERICA_SANTIAGO,
            Timezone::PACIFIC_EASTER,
        ]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
