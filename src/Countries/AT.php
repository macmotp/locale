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
 * Austria
 */
final class AT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::AUSTRIA);
        $this->setCapital('Vienna');
        $this->setCode(Country::AT);
        $this->setAlpha3Code('AUT');
        $this->setDialCode('+43');
        $this->setTld('.at');
        $this->setDateFormat('d.m.Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_VIENNA);
        $this->setDefaultLanguage(Language::GERMAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_VIENNA,]));
        $this->setLanguages(new Collection([Language::GERMAN,]));
    }
}
