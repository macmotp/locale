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
 * Kenya
 */
final class KE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::KENYA);
        $this->setCapital('Nairobi');
        $this->setCode(Country::KE);
        $this->setAlpha3Code('KEN');
        $this->setDialCode('+254');
        $this->setTld('.ke');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KES);
        $this->setDefaultTimezone(Timezone::AFRICA_NAIROBI);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::KES,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_NAIROBI,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::SWAHILI,]));
    }
}
