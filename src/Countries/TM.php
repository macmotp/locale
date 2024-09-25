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
 * Turkmenistan
 */
final class TM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::TURKMENISTAN);
        $this->setCapital('Ashgabat');
        $this->setCode(Country::TM);
        $this->setAlpha3Code('TKM');
        $this->setDialCode('+993');
        $this->setTld('.tm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::TMT);
        $this->setDefaultTimezone(Timezone::ASIA_ASHGABAT);
        $this->setDefaultLanguage(Language::TURKMEN);
        $this->setCurrencies(new Collection([Currency::TMT,]));
        $this->setTimezones(new Collection([Timezone::ASIA_ASHGABAT,]));
        $this->setLanguages(new Collection([Language::TURKMEN,]));
    }
}
