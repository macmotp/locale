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
 * Laos
 */
final class LA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::LAOS);
        $this->setCapital('Vientiane');
        $this->setCode(Country::LA);
        $this->setAlpha3Code('LAO');
        $this->setDialCode('+856');
        $this->setTld('.la');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::LAK);
        $this->setDefaultTimezone(Timezone::ASIA_VIENTIANE);
        $this->setDefaultLanguage(Language::LAO);
        $this->setCurrencies(new Collection([Currency::LAK,]));
        $this->setTimezones(new Collection([Timezone::ASIA_VIENTIANE,]));
        $this->setLanguages(new Collection([Language::LAO,]));
    }
}
