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
 * Trinidad and Tobago
 */
final class TT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::TRINIDAD_AND_TOBAGO);
        $this->setCapital('Port of Spain');
        $this->setCode(Country::TT);
        $this->setAlpha3Code('TTO');
        $this->setDialCode('+1868');
        $this->setTld('.tt');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::TTD);
        $this->setDefaultTimezone(Timezone::AMERICA_PORT_OF_SPAIN);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::TTD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_PORT_OF_SPAIN,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
