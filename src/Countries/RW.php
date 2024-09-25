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
 * Rwanda
 */
final class RW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::RWANDA);
        $this->setCapital('Kigali');
        $this->setCode(Country::RW);
        $this->setAlpha3Code('RWA');
        $this->setDialCode('+250');
        $this->setTld('.rw');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::RWF);
        $this->setDefaultTimezone(Timezone::AFRICA_KIGALI);
        $this->setDefaultLanguage(Language::KINYARWANDA);
        $this->setCurrencies(new Collection([Currency::RWF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_KIGALI,]));
        $this->setLanguages(new Collection([Language::KINYARWANDA,]));
    }
}
