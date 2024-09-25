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
 * Vatican City
 */
final class VA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::VATICAN_CITY);
        $this->setCapital('Vatican City');
        $this->setCode(Country::VA);
        $this->setAlpha3Code('VAT');
        $this->setDialCode('+379');
        $this->setTld('.va');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_VATICAN);
        $this->setDefaultLanguage(Language::ITALIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_VATICAN,]));
        $this->setLanguages(new Collection([Language::ITALIAN,]));
    }
}
