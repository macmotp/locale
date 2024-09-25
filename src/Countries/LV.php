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
 * Latvia
 */
final class LV extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::LATVIA);
        $this->setCapital('Riga');
        $this->setCode(Country::LV);
        $this->setAlpha3Code('LVA');
        $this->setDialCode('+371');
        $this->setTld('.lv');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_RIGA);
        $this->setDefaultLanguage(Language::LATVIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_RIGA,]));
        $this->setLanguages(new Collection([Language::LATVIAN,]));
    }
}
