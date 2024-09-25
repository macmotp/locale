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
 *  Georgia
 */
final class GE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::GEORGIA);
        $this->setCapital('Tbilisi');
        $this->setCode(Country::GE);
        $this->setAlpha3Code('GEO');
        $this->setDialCode('+995');
        $this->setTld('.ge');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GEL);
        $this->setDefaultTimezone(Timezone::ASIA_TBILISI);
        $this->setDefaultLanguage(Language::GEORGIAN);
        $this->setCurrencies(new Collection([Currency::GEL,]));
        $this->setTimezones(new Collection([Timezone::ASIA_TBILISI,]));
        $this->setLanguages(new Collection([Language::GEORGIAN,]));
    }
}
