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
 * New Caledonia
 */
final class NC extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::NEW_CALEDONIA);
        $this->setCapital('Nouméa');
        $this->setCode(Country::NC);
        $this->setAlpha3Code('NCL');
        $this->setDialCode('+687');
        $this->setTld('.nc');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XPF);
        $this->setDefaultTimezone(Timezone::PACIFIC_NOUMEA);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XPF,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_NOUMEA,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
