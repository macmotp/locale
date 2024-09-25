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
 * Nigeria
 */
final class NG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::NIGERIA);
        $this->setCapital('Abuja');
        $this->setCode(Country::NG);
        $this->setAlpha3Code('NGA');
        $this->setDialCode('+234');
        $this->setTld('.ng');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NGN);
        $this->setDefaultTimezone(Timezone::AFRICA_LAGOS);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::NGN,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_LAGOS,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
