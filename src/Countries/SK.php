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
 * Slovakia
 */
final class SK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::SLOVAKIA);
        $this->setCapital('Bratislava');
        $this->setCode(Country::SK);
        $this->setAlpha3Code('SVK');
        $this->setDialCode('+421');
        $this->setTld('.sk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_BRATISLAVA);
        $this->setDefaultLanguage(Language::SLOVAK);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_BRATISLAVA,]));
        $this->setLanguages(new Collection([Language::SLOVAK,]));
    }
}
