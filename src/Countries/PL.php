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
 * Poland
 */
final class PL extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::POLAND);
        $this->setCapital('Warsaw');
        $this->setCode(Country::PL);
        $this->setAlpha3Code('POL');
        $this->setDialCode('+48');
        $this->setTld('.pl');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::PLN);
        $this->setDefaultTimezone(Timezone::EUROPE_WARSAW);
        $this->setDefaultLanguage(Language::POLISH);
        $this->setCurrencies(new Collection([Currency::PLN,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_WARSAW,]));
        $this->setLanguages(new Collection([Language::POLISH,]));
    }
}
