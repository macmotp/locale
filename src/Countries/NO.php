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
 * Norway
 */
final class NO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::NORWAY);
        $this->setCapital('Oslo');
        $this->setCode(Country::NO);
        $this->setAlpha3Code('NOR');
        $this->setDialCode('+47');
        $this->setTld('.no');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NOK);
        $this->setDefaultTimezone(Timezone::EUROPE_OSLO);
        $this->setDefaultLanguage(Language::NORWEGIAN);
        $this->setCurrencies(new Collection([Currency::NOK,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_OSLO,]));
        $this->setLanguages(new Collection([Language::NORWEGIAN,]));
    }
}
