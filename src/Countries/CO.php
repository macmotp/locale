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
 *  Colombia
 */
final class CO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::COLOMBIA);
        $this->setCapital('Bogotá');
        $this->setCode(Country::CO);
        $this->setAlpha3Code('COL');
        $this->setDialCode('+57');
        $this->setTld('.co');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::COP);
        $this->setDefaultTimezone(Timezone::AMERICA_BOGOTA);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::COP,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_BOGOTA,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
