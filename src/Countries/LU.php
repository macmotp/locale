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
 * Luxembourg
 */
final class LU extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::LUXEMBOURG);
        $this->setCapital('Luxembourg');
        $this->setCode(Country::LU);
        $this->setAlpha3Code('LUX');
        $this->setDialCode('+352');
        $this->setTld('.lu');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_LUXEMBOURG);
        $this->setDefaultLanguage(Language::LUXEMBOURGISH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_LUXEMBOURG,]));
        $this->setLanguages(new Collection([
            Language::FRENCH,
            Language::GERMAN,
            Language::LUXEMBOURGISH,
        ]));
    }
}
