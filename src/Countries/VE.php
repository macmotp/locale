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
 * Venezuela
 */
final class VE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::VENEZUELA);
        $this->setCapital('Caracas');
        $this->setCode(Country::VE);
        $this->setAlpha3Code('VEN');
        $this->setDialCode('+58');
        $this->setTld('.ve');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::VES);
        $this->setDefaultTimezone(Timezone::AMERICA_CARACAS);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::VES,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_CARACAS,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
