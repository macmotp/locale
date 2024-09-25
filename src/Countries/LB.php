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
 * Lebanon
 */
final class LB extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::LEBANON);
        $this->setCapital('Beirut');
        $this->setCode(Country::LB);
        $this->setAlpha3Code('LBN');
        $this->setDialCode('+961');
        $this->setTld('.lb');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::LBP);
        $this->setDefaultTimezone(Timezone::ASIA_BEIRUT);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::LBP,]));
        $this->setTimezones(new Collection([Timezone::ASIA_BEIRUT,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
