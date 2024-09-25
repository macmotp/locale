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
 * Armenia
 */
final class AM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::ARMENIA);
        $this->setCapital('Yerevan');
        $this->setCode(Country::AM);
        $this->setAlpha3Code('ARM');
        $this->setDialCode('+374');
        $this->setTld('.am');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AMD);
        $this->setDefaultTimezone(Timezone::ASIA_YEREVAN);
        $this->setDefaultLanguage(Language::ARMENIAN);
        $this->setCurrencies(new Collection([Currency::AMD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_YEREVAN,]));
        $this->setLanguages(new Collection([Language::ARMENIAN,]));
    }
}
