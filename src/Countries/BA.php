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
 *  Bosnia and Herzegovina
 */
final class BA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::BOSNIA_AND_HERZEGOVINA);
        $this->setCapital('Sarajevo');
        $this->setCode(Country::BA);
        $this->setAlpha3Code('BIH');
        $this->setDialCode('+387');
        $this->setTld('.ba');
        $this->setDateFormat('d.m.Y');
        $this->setDefaultCurrency(Currency::BAM);
        $this->setDefaultTimezone(Timezone::EUROPE_SARAJEVO);
        $this->setDefaultLanguage(Language::BOSNIAN);
        $this->setCurrencies(new Collection([Currency::BAM,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_SARAJEVO,]));
        $this->setLanguages(new Collection([Language::BOSNIAN, Language::CROATIAN, Language::SERBIAN]));
    }
}
