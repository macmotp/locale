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
 * Virgin Islands (British)
 */
final class VG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::VIRGIN_ISLANDS_BRITISH);
        $this->setCapital('Road Town');
        $this->setCode(Country::VG);
        $this->setAlpha3Code('VGB');
        $this->setDialCode('+1284');
        $this->setTld('.vg');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::AMERICA_TORTOLA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_TORTOLA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
