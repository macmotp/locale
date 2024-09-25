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
 * Norfolk Island
 */
final class NF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::NORFOLK_ISLAND);
        $this->setCapital('Kingston');
        $this->setCode(Country::NF);
        $this->setAlpha3Code('NFK');
        $this->setDialCode('+672');
        $this->setTld('.nf');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::PACIFIC_NORFOLK);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_NORFOLK,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
