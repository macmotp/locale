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
 *  Cook Islands
 */
final class CK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::COOK_ISLANDS);
        $this->setCapital('Avarua');
        $this->setCode(Country::CK);
        $this->setAlpha3Code('COK');
        $this->setDialCode('+682');
        $this->setTld('.ck');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NZD);
        $this->setDefaultTimezone(Timezone::PACIFIC_RAROTONGA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::NZD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_RAROTONGA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
