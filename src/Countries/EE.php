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
 *  Estonia
 */
final class EE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::ESTONIA);
        $this->setCapital('Tallinn');
        $this->setCode(Country::EE);
        $this->setAlpha3Code('EST');
        $this->setDialCode('+372');
        $this->setTld('.ee');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_TALLINN);
        $this->setDefaultLanguage(Language::ESTONIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_TALLINN,]));
        $this->setLanguages(new Collection([Language::ESTONIAN,]));
    }
}
