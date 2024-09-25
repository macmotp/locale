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
 *  Guyana
 */
final class GY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::GUYANA);
        $this->setCapital('Georgetown');
        $this->setCode(Country::GY);
        $this->setAlpha3Code('GUY');
        $this->setDialCode('+592');
        $this->setTld('.gy');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GYD);
        $this->setDefaultTimezone(Timezone::AMERICA_GUYANA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::GYD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_GUYANA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
