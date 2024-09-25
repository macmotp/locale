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
 *  South Georgia and the South Sandwich Islands
 */
final class GS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ANTARCTICA);
        $this->setName(Country::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS);
        $this->setCapital('King Edward Point');
        $this->setCode(Country::GS);
        $this->setAlpha3Code('SGS');
        $this->setDialCode('+500');
        $this->setTld('.gs');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GBP);
        $this->setDefaultTimezone(Timezone::ATLANTIC_SOUTH_GEORGIA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::GBP,]));
        $this->setTimezones(new Collection([Timezone::ATLANTIC_SOUTH_GEORGIA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
