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
 *  Fiji
 */
final class FJ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::FIJI);
        $this->setCapital('Suva');
        $this->setCode(Country::FJ);
        $this->setAlpha3Code('FJI');
        $this->setDialCode('+679');
        $this->setTld('.fj');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::FJD);
        $this->setDefaultTimezone(Timezone::PACIFIC_FIJI);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::FJD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_FIJI,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
