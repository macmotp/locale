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
 *  Israel
 */
final class IL extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::ISRAEL);
        $this->setCapital('Jerusalem');
        $this->setCode(Country::IL);
        $this->setAlpha3Code('ISR');
        $this->setDialCode('+972');
        $this->setTld('.il');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ILS);
        $this->setDefaultTimezone(Timezone::ASIA_JERUSALEM);
        $this->setDefaultLanguage(Language::HEBREW);
        $this->setCurrencies(new Collection([Currency::ILS,]));
        $this->setTimezones(new Collection([Timezone::ASIA_JERUSALEM,]));
        $this->setLanguages(new Collection([Language::HEBREW, Language::ARABIC,]));
    }
}
