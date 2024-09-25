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
 * Palau
 */
final class PW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::PALAU);
        $this->setCapital('Ngerulmud');
        $this->setCode(Country::PW);
        $this->setAlpha3Code('PLW');
        $this->setDialCode('+680');
        $this->setTld('.pw');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::PACIFIC_PALAU);
        $this->setDefaultLanguage(Language::PALAUAN);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_PALAU,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::PALAUAN,]));
    }
}
