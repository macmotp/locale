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
 * Nicaragua
 */
final class NI extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::NICARAGUA);
        $this->setCapital('Managua');
        $this->setCode(Country::NI);
        $this->setAlpha3Code('NIC');
        $this->setDialCode('+505');
        $this->setTld('.ni');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NIO);
        $this->setDefaultTimezone(Timezone::AMERICA_MANAGUA);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::NIO,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_MANAGUA,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
