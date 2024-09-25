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
 * Vanuatu
 */
final class VU extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::VANUATU);
        $this->setCapital('Port Vila');
        $this->setCode(Country::VU);
        $this->setAlpha3Code('VUT');
        $this->setDialCode('+678');
        $this->setTld('.vu');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::VUV);
        $this->setDefaultTimezone(Timezone::PACIFIC_EFATE);
        $this->setDefaultLanguage(Language::BISLAMA);
        $this->setCurrencies(new Collection([Currency::VUV,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_EFATE,]));
        $this->setLanguages(new Collection([Language::BISLAMA, Language::ENGLISH, Language::FRENCH,]));
    }
}
