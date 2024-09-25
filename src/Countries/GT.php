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
 *  Guatemala
 */
final class GT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::GUATEMALA);
        $this->setCapital('Guatemala City');
        $this->setCode(Country::GT);
        $this->setAlpha3Code('GTM');
        $this->setDialCode('+502');
        $this->setTld('.gt');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GTQ);
        $this->setDefaultTimezone(Timezone::AMERICA_GUATEMALA);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::GTQ,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_GUATEMALA,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
