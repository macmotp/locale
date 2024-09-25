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
 *  Heard Island and McDonald Islands
 */
final class HM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ANTARCTICA);
        $this->setName(Country::HEARD_ISLAND_AND_MCDONALD_ISLANDS);
        $this->setCapital('N/A');
        $this->setCode(Country::HM);
        $this->setAlpha3Code('HMD');
        $this->setDialCode('+672');
        $this->setTld('.hm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::INDIAN_MALDIVES);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_MALDIVES,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
