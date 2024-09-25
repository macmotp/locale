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
 * Italy
 */
final class IT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::ITALY);
        $this->setCapital('Rome');
        $this->setCode(Country::IT);
        $this->setAlpha3Code('ITA');
        $this->setDialCode('+39');
        $this->setTld('.it');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_ROME);
        $this->setDefaultLanguage(Language::ITALIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_ROME,]));
        $this->setLanguages(new Collection([Language::ITALIAN,]));
    }
}
