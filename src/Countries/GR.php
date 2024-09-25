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
 *  Greece
 */
final class GR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::GREECE);
        $this->setCapital('Athens');
        $this->setCode(Country::GR);
        $this->setAlpha3Code('GRC');
        $this->setDialCode('+30');
        $this->setTld('.gr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_ATHENS);
        $this->setDefaultLanguage(Language::GREEK);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_ATHENS,]));
        $this->setLanguages(new Collection([Language::GREEK,]));
    }
}
