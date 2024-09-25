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
 * Solomon Islands
 */
final class SB extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::SOLOMON_ISLANDS);
        $this->setCapital('Honiara');
        $this->setCode(Country::SB);
        $this->setAlpha3Code('SLB');
        $this->setDialCode('+677');
        $this->setTld('.sb');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::PACIFIC_GUADALCANAL);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_GUADALCANAL,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
