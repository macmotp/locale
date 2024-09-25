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
 * Saint Vincent and the Grenadines
 */
final class VC extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::SAINT_VINCENT_AND_THE_GRENADINES);
        $this->setCapital('Kingstown');
        $this->setCode(Country::VC);
        $this->setAlpha3Code('VCT');
        $this->setDialCode('+1784');
        $this->setTld('.vc');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XCD);
        $this->setDefaultTimezone(Timezone::AMERICA_ST_VINCENT);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::XCD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_ST_VINCENT,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
