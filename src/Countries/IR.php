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
 *  Iran
 */
final class IR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::IRAN);
        $this->setCapital('Tehran');
        $this->setCode(Country::IR);
        $this->setAlpha3Code('IRN');
        $this->setDialCode('+98');
        $this->setTld('.ir');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::IRR);
        $this->setDefaultTimezone(Timezone::ASIA_TEHRAN);
        $this->setDefaultLanguage(Language::PERSIAN);
        $this->setCurrencies(new Collection([Currency::IRR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_TEHRAN,]));
        $this->setLanguages(new Collection([Language::PERSIAN,]));
    }
}
