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
 * Samoa
 */
final class WS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::SAMOA);
        $this->setCapital('Apia');
        $this->setCode(Country::WS);
        $this->setAlpha3Code('WSM');
        $this->setDialCode('+685');
        $this->setTld('.ws');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::WST);
        $this->setDefaultTimezone(Timezone::PACIFIC_APIA);
        $this->setDefaultLanguage(Language::SAMOAN);
        $this->setCurrencies(new Collection([Currency::WST,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_APIA,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::SAMOAN,]));
    }
}
