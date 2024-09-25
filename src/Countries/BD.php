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
 *  Bangladesh
 */
final class BD extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::BANGLADESH);
        $this->setCapital('Dhaka');
        $this->setCode(Country::BD);
        $this->setAlpha3Code('BGD');
        $this->setDialCode('+880');
        $this->setTld('.bd');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::BDT);
        $this->setDefaultTimezone(Timezone::ASIA_DHAKA);
        $this->setDefaultLanguage(Language::BENGALI);
        $this->setCurrencies(new Collection([Currency::BDT,]));
        $this->setTimezones(new Collection([Timezone::ASIA_DHAKA,]));
        $this->setLanguages(new Collection([Language::BENGALI,]));
    }
}
