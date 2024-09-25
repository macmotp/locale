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
 * Cayman Islands
 */
final class KY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::CAYMAN_ISLANDS);
        $this->setCapital('George Town');
        $this->setCode(Country::KY);
        $this->setAlpha3Code('CYM');
        $this->setDialCode('+345');
        $this->setTld('.ky');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KYD);
        $this->setDefaultTimezone(Timezone::AMERICA_CAYMAN);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::KYD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_CAYMAN,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
