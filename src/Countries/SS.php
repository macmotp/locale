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
 * South Sudan
 */
final class SS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SOUTH_SUDAN);
        $this->setCapital('Juba');
        $this->setCode(Country::SS);
        $this->setAlpha3Code('SSD');
        $this->setDialCode('+211');
        $this->setTld('.ss');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SSP);
        $this->setDefaultTimezone(Timezone::AFRICA_JUBA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::SSP,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_JUBA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
