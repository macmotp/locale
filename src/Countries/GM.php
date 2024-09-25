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
 *  Gambia
 */
final class GM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::GAMBIA);
        $this->setCapital('Banjul');
        $this->setCode(Country::GM);
        $this->setAlpha3Code('GMB');
        $this->setDialCode('+220');
        $this->setTld('.gm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GMD);
        $this->setDefaultTimezone(Timezone::AFRICA_BANJUL);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::GMD,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_BANJUL,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
