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
 *  Belgium
 */
final class BE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::BELGIUM);
        $this->setCapital('Brussels');
        $this->setCode(Country::BE);
        $this->setAlpha3Code('BEL');
        $this->setDialCode('+32');
        $this->setTld('.be');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_BRUSSELS);
        $this->setDefaultLanguage(Language::DUTCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_BRUSSELS,]));
        $this->setLanguages(new Collection([Language::DUTCH, Language::FRENCH, Language::GERMAN]));
    }
}
