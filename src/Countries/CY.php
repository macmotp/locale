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
 *  Cyprus
 */
final class CY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::CYPRUS);
        $this->setCapital('Nicosia');
        $this->setCode(Country::CY);
        $this->setAlpha3Code('CYP');
        $this->setDialCode('+357');
        $this->setTld('.cy');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::ASIA_NICOSIA);
        $this->setDefaultLanguage(Language::GREEK);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_FAMAGUSTA,
            Timezone::ASIA_NICOSIA,
        ]));
        $this->setLanguages(new Collection([Language::GREEK, Language::TURKISH,]));
    }
}
