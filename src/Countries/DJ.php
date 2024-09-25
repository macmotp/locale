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
 *  Djibouti
 */
final class DJ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::DJIBOUTI);
        $this->setCapital('Djibouti City');
        $this->setCode(Country::DJ);
        $this->setAlpha3Code('DJI');
        $this->setDialCode('+253');
        $this->setTld('.dj');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::DJF);
        $this->setDefaultTimezone(Timezone::AFRICA_DJIBOUTI);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::DJF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_DJIBOUTI,]));
        $this->setLanguages(new Collection([Language::FRENCH, Language::ARABIC,]));
    }
}
