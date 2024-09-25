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
 *  Bolivia
 */
final class BO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::BOLIVIA);
        $this->setCapital('Sucre');
        $this->setCode(Country::BO);
        $this->setAlpha3Code('BOL');
        $this->setDialCode('+591');
        $this->setTld('.bo');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::BOB);
        $this->setDefaultTimezone(Timezone::AMERICA_LA_PAZ);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::BOB,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_LA_PAZ,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
