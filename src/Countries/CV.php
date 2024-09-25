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
 *  Cape Verde
 */
final class CV extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::CAPE_VERDE);
        $this->setCapital('Praia');
        $this->setCode(Country::CV);
        $this->setAlpha3Code('CPV');
        $this->setDialCode('+238');
        $this->setTld('.cv');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::CVE);
        $this->setDefaultTimezone(Timezone::ATLANTIC_CAPE_VERDE);
        $this->setDefaultLanguage(Language::PORTUGUESE);
        $this->setCurrencies(new Collection([Currency::CVE,]));
        $this->setTimezones(new Collection([Timezone::ATLANTIC_CAPE_VERDE,]));
        $this->setLanguages(new Collection([Language::PORTUGUESE,]));
    }
}
