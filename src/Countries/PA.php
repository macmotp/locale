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
 * Panama
 */
final class PA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::PANAMA);
        $this->setCapital('Panama City');
        $this->setCode(Country::PA);
        $this->setAlpha3Code('PAN');
        $this->setDialCode('+507');
        $this->setTld('.pa');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::PAB);
        $this->setDefaultTimezone(Timezone::AMERICA_PANAMA);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::PAB, Currency::USD]));
        $this->setTimezones(new Collection([Timezone::AMERICA_PANAMA,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
