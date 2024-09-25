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
 * Nepal
 */
final class NP extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::NEPAL);
        $this->setCapital('Kathmandu');
        $this->setCode(Country::NP);
        $this->setAlpha3Code('NPL');
        $this->setDialCode('+977');
        $this->setTld('.np');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NPR);
        $this->setDefaultTimezone(Timezone::ASIA_KATHMANDU);
        $this->setDefaultLanguage(Language::NEPALI);
        $this->setCurrencies(new Collection([Currency::NPR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_KATHMANDU,]));
        $this->setLanguages(new Collection([Language::NEPALI,]));
    }
}
