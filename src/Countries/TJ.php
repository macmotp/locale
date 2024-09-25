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
 * Tajikistan
 */
final class TJ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::TAJIKISTAN);
        $this->setCapital('Dushanbe');
        $this->setCode(Country::TJ);
        $this->setAlpha3Code('TJK');
        $this->setDialCode('+992');
        $this->setTld('.tj');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::TJS);
        $this->setDefaultTimezone(Timezone::ASIA_DUSHANBE);
        $this->setDefaultLanguage(Language::TAJIK);
        $this->setCurrencies(new Collection([Currency::TJS,]));
        $this->setTimezones(new Collection([Timezone::ASIA_DUSHANBE,]));
        $this->setLanguages(new Collection([Language::RUSSIAN, Language::TAJIK,]));
    }
}
