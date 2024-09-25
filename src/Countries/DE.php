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
 *  Germany
 */
final class DE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::GERMANY);
        $this->setCapital('Berlin');
        $this->setCode(Country::DE);
        $this->setAlpha3Code('DEU');
        $this->setDialCode('+49');
        $this->setTld('.de');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_BERLIN);
        $this->setDefaultLanguage(Language::GERMAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_BERLIN,]));
        $this->setLanguages(new Collection([Language::GERMAN,]));
    }
}
