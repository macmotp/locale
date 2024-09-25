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
 * Yemen
 */
final class YE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::YEMEN);
        $this->setCapital('Sana\'a');
        $this->setCode(Country::YE);
        $this->setAlpha3Code('YEM');
        $this->setDialCode('+967');
        $this->setTld('.ye');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::YER);
        $this->setDefaultTimezone(Timezone::ASIA_ADEN);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::YER,]));
        $this->setTimezones(new Collection([Timezone::ASIA_ADEN,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
