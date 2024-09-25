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
 * Virgin Islands (U.S.)
 */
final class VI extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::VIRGIN_ISLANDS_US);
        $this->setCapital('Charlotte Amalie');
        $this->setCode(Country::VI);
        $this->setAlpha3Code('VIR');
        $this->setDialCode('+1340');
        $this->setTld('.vi');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::AMERICA_ST_THOMAS);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_ST_THOMAS,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
