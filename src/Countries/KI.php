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
 * Kiribati
 */
final class KI extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::KIRIBATI);
        $this->setCapital('South Tarawa');
        $this->setCode(Country::KI);
        $this->setAlpha3Code('KIR');
        $this->setDialCode('+686');
        $this->setTld('.ki');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AUD);
        $this->setDefaultTimezone(Timezone::PACIFIC_TARAWA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::AUD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_TARAWA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
