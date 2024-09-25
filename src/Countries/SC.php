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
 * Seychelles
 */
final class SC extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SEYCHELLES);
        $this->setCapital('Victoria');
        $this->setCode(Country::SC);
        $this->setAlpha3Code('SYC');
        $this->setDialCode('+248');
        $this->setTld('.sc');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SCR);
        $this->setDefaultTimezone(Timezone::INDIAN_MAHE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::SCR,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_MAHE,]));
        $this->setLanguages(new Collection([
            Language::ENGLISH,
            Language::FRENCH,
            Language::SEYCHELLOIS_CREOLE,
        ]));
    }
}
