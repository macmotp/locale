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
 *  Croatia
 */
final class HR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::CROATIA);
        $this->setCapital('Zagreb');
        $this->setCode(Country::HR);
        $this->setAlpha3Code('HRV');
        $this->setDialCode('+385');
        $this->setTld('.hr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_ZAGREB);
        $this->setDefaultLanguage(Language::CROATIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_ZAGREB,]));
        $this->setLanguages(new Collection([Language::CROATIAN,]));
    }
}
