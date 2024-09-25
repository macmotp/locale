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
 * New Zealand
 */
final class NZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::NEW_ZEALAND);
        $this->setCapital('Wellington');
        $this->setCode(Country::NZ);
        $this->setAlpha3Code('NZL');
        $this->setDialCode('+64');
        $this->setTld('.nz');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NZD);
        $this->setDefaultTimezone(Timezone::PACIFIC_AUCKLAND);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::NZD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_AUCKLAND, Timezone::PACIFIC_CHATHAM]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::MAORI,]));
    }
}
