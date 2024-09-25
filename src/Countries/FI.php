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
 *  Finland
 */
final class FI extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::FINLAND);
        $this->setCapital('Helsinki');
        $this->setCode(Country::FI);
        $this->setAlpha3Code('FIN');
        $this->setDialCode('+358');
        $this->setTld('.fi');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_HELSINKI);
        $this->setDefaultLanguage(Language::FINNISH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_HELSINKI,]));
        $this->setLanguages(new Collection([Language::FINNISH,]));
    }
}
