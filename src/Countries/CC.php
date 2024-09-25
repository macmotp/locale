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
 *  Cocos (Keeling) Islands
 */
final class CC extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::COCOS_KEELING_ISLANDS);
        $this->setCapital('West Island');
        $this->setCode(Country::CC);
        $this->setAlpha3Code('CCK');
        $this->setDialCode('+61');
        $this->setTld('.cc');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::INDIAN_COCOS);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_COCOS,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
