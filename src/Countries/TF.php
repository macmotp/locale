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
 * French Southern Territories
 */
final class TF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ANTARCTICA);
        $this->setName(Country::FRENCH_SOUTHERN_TERRITORIES);
        $this->setCapital('Port-aux-Français');
        $this->setCode(Country::TF);
        $this->setAlpha3Code('ATF');
        $this->setDialCode('+262');
        $this->setTld('.tf');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::INDIAN_KERGUELEN);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_KERGUELEN,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
