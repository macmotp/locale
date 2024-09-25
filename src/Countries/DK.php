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
 *  Denmark
 */
final class DK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::DENMARK);
        $this->setCapital('Copenhagen');
        $this->setCode(Country::DK);
        $this->setAlpha3Code('DNK');
        $this->setDialCode('+45');
        $this->setTld('.dk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::DKK);
        $this->setDefaultTimezone(Timezone::EUROPE_COPENHAGEN);
        $this->setDefaultLanguage(Language::DANISH);
        $this->setCurrencies(new Collection([Currency::DKK,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_COPENHAGEN,]));
        $this->setLanguages(new Collection([Language::DANISH,]));
    }
}
