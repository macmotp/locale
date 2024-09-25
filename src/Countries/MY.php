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
 * Malaysia
 */
final class MY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::MALAYSIA);
        $this->setCapital('Kuala Lumpur');
        $this->setCode(Country::MY);
        $this->setAlpha3Code('MYS');
        $this->setDialCode('+60');
        $this->setTld('.my');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MYR);
        $this->setDefaultTimezone(Timezone::ASIA_KUALA_LUMPUR);
        $this->setDefaultLanguage(Language::MALAY);
        $this->setCurrencies(new Collection([Currency::MYR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_KUALA_LUMPUR, Timezone::ASIA_KUCHING,]));
        $this->setLanguages(new Collection([Language::MALAY,]));
    }
}
