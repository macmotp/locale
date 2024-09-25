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
 * Tokelau
 */
final class TK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::TOKELAU);
        $this->setCapital('Fakaofo');
        $this->setCode(Country::TK);
        $this->setAlpha3Code('TKL');
        $this->setDialCode('+690');
        $this->setTld('.tk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NZD);
        $this->setDefaultTimezone(Timezone::PACIFIC_FAKAOFO);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::NZD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_FAKAOFO,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::TOKELAUAN,]));
    }
}
