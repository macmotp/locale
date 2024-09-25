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
 * San Marino
 */
final class SM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::SAN_MARINO);
        $this->setCapital('San Marino');
        $this->setCode(Country::SM);
        $this->setAlpha3Code('SMR');
        $this->setDialCode('+378');
        $this->setTld('.sm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_SAN_MARINO);
        $this->setDefaultLanguage(Language::ITALIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_SAN_MARINO,]));
        $this->setLanguages(new Collection([Language::ITALIAN,]));
    }
}
