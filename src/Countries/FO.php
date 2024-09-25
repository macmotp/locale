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
 *  Faroe Islands
 */
final class FO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::FAROE_ISLANDS);
        $this->setCapital('Tórshavn');
        $this->setCode(Country::FO);
        $this->setAlpha3Code('FRO');
        $this->setDialCode('+298');
        $this->setTld('.fo');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::DKK);
        $this->setDefaultTimezone(Timezone::ATLANTIC_FAROE);
        $this->setDefaultLanguage(Language::FAROESE);
        $this->setCurrencies(new Collection([Currency::DKK,]));
        $this->setTimezones(new Collection([Timezone::ATLANTIC_FAROE,]));
        $this->setLanguages(new Collection([Language::FAROESE,]));
    }
}
