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
 * Jersey
 */
final class JE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::JERSEY);
        $this->setCapital('Saint Helier');
        $this->setCode(Country::JE);
        $this->setAlpha3Code('JEY');
        $this->setDialCode('+44');
        $this->setTld('.je');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GBP);
        $this->setDefaultTimezone(Timezone::EUROPE_JERSEY);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::GBP,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_JERSEY,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
