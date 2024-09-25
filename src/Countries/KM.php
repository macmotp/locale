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
 * Comoros
 */
final class KM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::COMOROS);
        $this->setCapital('Moroni');
        $this->setCode(Country::KM);
        $this->setAlpha3Code('COM');
        $this->setDialCode('+269');
        $this->setTld('.km');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KMF);
        $this->setDefaultTimezone(Timezone::INDIAN_COMORO);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::KMF,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_COMORO,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
