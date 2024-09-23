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
 * Andorra
 */
final class AD extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::ANDORRA);
        $this->setCapital('Andorra la Vella');
        $this->setCode(Country::AD);
        $this->setAlpha3Code('AND');
        $this->setDialCode('+376');
        $this->setTld('.ad');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_ANDORRA);
        $this->setDefaultLanguage(Language::CATALAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_ANDORRA,]));
        $this->setLanguages(new Collection([Language::CATALAN,]));
    }
}
