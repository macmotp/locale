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
 * Jordan
 */
final class JO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::JORDAN);
        $this->setCapital('Amman');
        $this->setCode(Country::JO);
        $this->setAlpha3Code('JOR');
        $this->setDialCode('+962');
        $this->setTld('.jo');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::JOD);
        $this->setDefaultTimezone(Timezone::ASIA_AMMAN);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::JOD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_AMMAN,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
