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
 * Malta
 */
final class MT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::MALTA);
        $this->setCapital('Valletta');
        $this->setCode(Country::MT);
        $this->setAlpha3Code('MLT');
        $this->setDialCode('+356');
        $this->setTld('.mt');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_MALTA);
        $this->setDefaultLanguage(Language::MALTESE);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_MALTA,]));
        $this->setLanguages(new Collection([Language::MALTESE, Language::ENGLISH,]));
    }
}
