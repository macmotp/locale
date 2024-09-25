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
 * American Samoa
 */
final class AS_ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::OCEANIA);
        $this->setName(Country::AMERICAN_SAMOA);
        $this->setCapital('Pago Pago');
        $this->setCode(Country::AS);
        $this->setAlpha3Code('ASM');
        $this->setDialCode('+1684');
        $this->setTld('.as');
        $this->setDateFormat('m/d/Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::PACIFIC_PAGO_PAGO);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::PACIFIC_PAGO_PAGO,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
