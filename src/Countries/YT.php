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
 * Mayotte
 */
final class YT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::MAYOTTE);
        $this->setCapital('Mamoudzou');
        $this->setCode(Country::YT);
        $this->setAlpha3Code('MYT');
        $this->setDialCode('+262');
        $this->setTld('.yt');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::INDIAN_MAYOTTE);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_MAYOTTE,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
