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
 * Saint Helena
 */
final class SH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SAINT_HELENA);
        $this->setCapital('Jamestown');
        $this->setCode(Country::SH);
        $this->setAlpha3Code('SHN');
        $this->setDialCode('+290');
        $this->setTld('.sh');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SHP);
        $this->setDefaultTimezone(Timezone::ATLANTIC_ST_HELENA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::SHP,]));
        $this->setTimezones(new Collection([Timezone::ATLANTIC_ST_HELENA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
