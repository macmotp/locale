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
 *  Bulgaria
 */
final class BG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::BULGARIA);
        $this->setCapital('Sofia');
        $this->setCode(Country::BG);
        $this->setAlpha3Code('BGR');
        $this->setDialCode('+359');
        $this->setTld('.bg');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::BGN);
        $this->setDefaultTimezone(Timezone::EUROPE_SOFIA);
        $this->setDefaultLanguage(Language::BULGARIAN);
        $this->setCurrencies(new Collection([Currency::BGN,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_SOFIA,]));
        $this->setLanguages(new Collection([Language::BULGARIAN,]));
    }
}
