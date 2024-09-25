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
 *  Christmas Island
 */
final class CX extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::CHRISTMAS_ISLAND);
        $this->setCapital('Flying Fish Cove');
        $this->setCode(Country::CX);
        $this->setAlpha3Code('CXR');
        $this->setDialCode('+61');
        $this->setTld('.cx');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::ASIA_BANGKOK);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_BANGKOK,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
