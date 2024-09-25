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
 * Pakistan
 */
final class PK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::PAKISTAN);
        $this->setCapital('Islamabad');
        $this->setCode(Country::PK);
        $this->setAlpha3Code('PAK');
        $this->setDialCode('+92');
        $this->setTld('.pk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::PKR);
        $this->setDefaultTimezone(Timezone::ASIA_KARACHI);
        $this->setDefaultLanguage(Language::URDU);
        $this->setCurrencies(new Collection([Currency::PKR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_KARACHI,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::URDU,]));
    }
}
