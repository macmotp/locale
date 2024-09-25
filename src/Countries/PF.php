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
 * French Polynesia
 */
final class PF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::FRENCH_POLYNESIA);
        $this->setCapital('Papeete');
        $this->setCode(Country::PF);
        $this->setAlpha3Code('PYF');
        $this->setDialCode('+689');
        $this->setTld('.pf');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XPF);
        $this->setDefaultTimezone(Timezone::PACIFIC_TAHITI);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XPF,]));
        $this->setTimezones(new Collection([
            Timezone::PACIFIC_GAMBIER,
            Timezone::PACIFIC_MARQUESAS,
            Timezone::PACIFIC_TAHITI,
        ]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
