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
 *  Greenland
 */
final class GL extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::GREENLAND);
        $this->setCapital('Nuuk');
        $this->setCode(Country::GL);
        $this->setAlpha3Code('GRL');
        $this->setDialCode('+299');
        $this->setTld('.gl');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::DKK);
        $this->setDefaultTimezone(Timezone::AMERICA_NUUK);
        $this->setDefaultLanguage(Language::GREENLANDIC);
        $this->setCurrencies(new Collection([Currency::DKK,]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_DANMARKSHAVN,
            Timezone::AMERICA_NUUK,
            Timezone::AMERICA_SCORESBYSUND,
            Timezone::AMERICA_THULE,
        ]));
        $this->setLanguages(new Collection([
            Language::DANISH,
            Language::ENGLISH,
            Language::GREENLANDIC,
        ]));
    }
}
