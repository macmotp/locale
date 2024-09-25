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
 *  Belarus
 */
final class BY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::BELARUS);
        $this->setCapital('Minsk');
        $this->setCode(Country::BY);
        $this->setAlpha3Code('BLR');
        $this->setDialCode('+375');
        $this->setTld('.by');
        $this->setDateFormat('d.m.Y');
        $this->setDefaultCurrency(Currency::BYN);
        $this->setDefaultTimezone(Timezone::EUROPE_MINSK);
        $this->setDefaultLanguage(Language::BELARUSIAN);
        $this->setCurrencies(new Collection([Currency::BYN,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_MINSK,]));
        $this->setLanguages(new Collection([Language::BELARUSIAN, Language::RUSSIAN,]));
    }
}
