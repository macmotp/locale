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
 *  Costa Rica
 */
final class CR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::COSTA_RICA);
        $this->setCapital('San José');
        $this->setCode(Country::CR);
        $this->setAlpha3Code('CRI');
        $this->setDialCode('+506');
        $this->setTld('.cr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::CRC);
        $this->setDefaultTimezone(Timezone::AMERICA_COSTA_RICA);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::CRC,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_COSTA_RICA,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
