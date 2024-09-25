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
 * Nauru
 */
final class NR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::NAURU);
        $this->setCapital('Yaren');
        $this->setCode(Country::NR);
        $this->setAlpha3Code('NRU');
        $this->setDialCode('+674');
        $this->setTld('.nr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::PACIFIC_NAURU);
        $this->setDefaultLanguage(Language::NAURUAN);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_NAURU,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::NAURUAN]));
    }
}
