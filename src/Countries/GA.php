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
 *  Gabon
 */
final class GA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::GABON);
        $this->setCapital('Libreville');
        $this->setCode(Country::GA);
        $this->setAlpha3Code('GAB');
        $this->setDialCode('+241');
        $this->setTld('.ga');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XAF);
        $this->setDefaultTimezone(Timezone::AFRICA_LIBREVILLE);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XAF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_LIBREVILLE,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
