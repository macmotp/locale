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
 * Lithuania
 */
final class LT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::LITHUANIA);
        $this->setCapital('Vilnius');
        $this->setCode(Country::LT);
        $this->setAlpha3Code('LTU');
        $this->setDialCode('+370');
        $this->setTld('.lt');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_VILNIUS);
        $this->setDefaultLanguage(Language::LITHUANIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_VILNIUS,]));
        $this->setLanguages(new Collection([Language::LITHUANIAN,]));
    }
}
