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
 *  Indonesia
 */
final class ID extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::INDONESIA);
        $this->setCapital('Jakarta');
        $this->setCode(Country::ID);
        $this->setAlpha3Code('IDN');
        $this->setDialCode('+62');
        $this->setTld('.id');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::IDR);
        $this->setDefaultTimezone(Timezone::ASIA_JAKARTA);
        $this->setDefaultLanguage(Language::INDONESIAN);
        $this->setCurrencies(new Collection([Currency::IDR,]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_JAKARTA,
            Timezone::ASIA_JAYAPURA,
            Timezone::ASIA_MAKASSAR,
            Timezone::ASIA_PONTIANAK,
        ]));
        $this->setLanguages(new Collection([Language::INDONESIAN,]));
    }
}
