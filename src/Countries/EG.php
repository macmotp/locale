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
 *  Egypt
 */
final class EG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::EGYPT);
        $this->setCapital('Cairo');
        $this->setCode(Country::EG);
        $this->setAlpha3Code('EGY');
        $this->setDialCode('+20');
        $this->setTld('.eg');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EGP);
        $this->setDefaultTimezone(Timezone::AFRICA_CAIRO);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::EGP,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_CAIRO,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
