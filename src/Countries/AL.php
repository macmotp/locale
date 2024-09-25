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
 * Albania
 */
final class AL extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::ALBANIA);
        $this->setCapital('Tirana');
        $this->setCode(Country::AL);
        $this->setAlpha3Code('ALB');
        $this->setDialCode('+355');
        $this->setTld('.al');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ALL);
        $this->setDefaultTimezone(Timezone::EUROPE_TIRANE);
        $this->setDefaultLanguage(Language::ALBANIAN);
        $this->setCurrencies(new Collection([Currency::ALL,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_TIRANE,]));
        $this->setLanguages(new Collection([Language::ALBANIAN,]));
    }
}
