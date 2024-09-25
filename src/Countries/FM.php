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
 *  Micronesia
 */
final class FM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::MICRONESIA);
        $this->setCapital('Palikir');
        $this->setCode(Country::FM);
        $this->setAlpha3Code('FSM');
        $this->setDialCode('+691');
        $this->setTld('.fm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::PACIFIC_KOSRAE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_KOSRAE,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
