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
 * Suriname
 */
final class SR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::SURINAME);
        $this->setCapital('Paramaribo');
        $this->setCode(Country::SR);
        $this->setAlpha3Code('SUR');
        $this->setDialCode('+597');
        $this->setTld('.sr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SRD);
        $this->setDefaultTimezone(Timezone::AMERICA_PARAMARIBO);
        $this->setDefaultLanguage(Language::DUTCH);
        $this->setCurrencies(new Collection([Currency::SRD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_PARAMARIBO,]));
        $this->setLanguages(new Collection([Language::DUTCH,]));
    }
}
