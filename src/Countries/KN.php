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
 * Saint Kitts and Nevis
 */
final class KN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::SAINT_KITTS_AND_NEVIS);
        $this->setCapital('Basseterre');
        $this->setCode(Country::KN);
        $this->setAlpha3Code('KNA');
        $this->setDialCode('+1869');
        $this->setTld('.kn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XCD);
        $this->setDefaultTimezone(Timezone::AMERICA_PORT_AU_PRINCE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::XCD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_PORT_AU_PRINCE,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
