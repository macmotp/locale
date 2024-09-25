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
 *  Isle of Man
 */
final class IM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::ISLE_OF_MAN);
        $this->setCapital('Douglas');
        $this->setCode(Country::IM);
        $this->setAlpha3Code('IMN');
        $this->setDialCode('+44');
        $this->setTld('.im');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GBP);
        $this->setDefaultTimezone(Timezone::EUROPE_LONDON);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::GBP,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_LONDON,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
