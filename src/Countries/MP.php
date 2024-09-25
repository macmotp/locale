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
 * Northern Mariana Islands
 */
final class MP extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::NORTHERN_MARIANA_ISLANDS);
        $this->setCapital('Saipan');
        $this->setCode(Country::MP);
        $this->setAlpha3Code('MNP');
        $this->setDialCode('+1670');
        $this->setTld('.mp');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::PACIFIC_SAIPAN);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_SAIPAN,]));
        $this->setLanguages(new Collection([
            Language::CAROLINIAN,
            Language::CHAMORRO,
            Language::ENGLISH,
        ]));
    }
}
