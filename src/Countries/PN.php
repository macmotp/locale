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
 * Pitcairn Islands
 */
final class PN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::PITCAIRN_ISLANDS);
        $this->setCapital('Adamstown');
        $this->setCode(Country::PN);
        $this->setAlpha3Code('PCN');
        $this->setDialCode('+64');
        $this->setTld('.pn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::NZD);
        $this->setDefaultTimezone(Timezone::PACIFIC_PITCAIRN);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::NZD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_PITCAIRN,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
