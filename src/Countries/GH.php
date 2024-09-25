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
 *  Ghana
 */
final class GH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::GHANA);
        $this->setCapital('Accra');
        $this->setCode(Country::GH);
        $this->setAlpha3Code('GHA');
        $this->setDialCode('+233');
        $this->setTld('.gh');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GHS);
        $this->setDefaultTimezone(Timezone::AFRICA_ACCRA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::GHS,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_ACCRA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
