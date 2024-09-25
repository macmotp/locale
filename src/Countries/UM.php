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
 * U.S. Minor Outlying Islands
 */
final class UM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::US_MINOR_OUTLYING_ISLANDS);
        $this->setCapital('N/A');
        $this->setCode(Country::UM);
        $this->setAlpha3Code('UMI');
        $this->setDialCode('+1');
        $this->setTld('.um');
        $this->setDateFormat('m-d-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::PACIFIC_WAKE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([
            Timezone::PACIFIC_MIDWAY,
            Timezone::PACIFIC_WAKE,
        ]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
