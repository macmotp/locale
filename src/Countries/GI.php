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
 *  Gibraltar
 */
final class GI extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::GIBRALTAR);
        $this->setCapital('Gibraltar');
        $this->setCode(Country::GI);
        $this->setAlpha3Code('GIB');
        $this->setDialCode('+350');
        $this->setTld('.gi');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GIP);
        $this->setDefaultTimezone(Timezone::EUROPE_GIBRALTAR);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::GIP,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_GIBRALTAR,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
