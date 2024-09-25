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
 * Mexico
 */
final class MX extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::MEXICO);
        $this->setCapital('Mexico City');
        $this->setCode(Country::MX);
        $this->setAlpha3Code('MEX');
        $this->setDialCode('+52');
        $this->setTld('.mx');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MXN);
        $this->setDefaultTimezone(Timezone::AMERICA_MEXICO_CITY);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::MXN,]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_BAHIA_BANDERAS,
            Timezone::AMERICA_CANCUN,
            Timezone::AMERICA_CHIHUAHUA,
            Timezone::AMERICA_CIUDAD_JUAREZ,
            Timezone::AMERICA_HERMOSILLO,
            Timezone::AMERICA_MATAMOROS,
            Timezone::AMERICA_MAZATLAN,
            Timezone::AMERICA_MERIDA,
            Timezone::AMERICA_MEXICO_CITY,
            Timezone::AMERICA_MONTERREY,
            Timezone::AMERICA_OJINAGA,
            Timezone::AMERICA_TIJUANA,
        ]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
