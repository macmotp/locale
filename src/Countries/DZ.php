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
 *  Algeria
 */
final class DZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::ALGERIA);
        $this->setCapital('Algiers');
        $this->setCode(Country::DZ);
        $this->setAlpha3Code('DZA');
        $this->setDialCode('+213');
        $this->setTld('.dz');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::DZD);
        $this->setDefaultTimezone(Timezone::AFRICA_ALGIERS);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::DZD,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_ALGIERS,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
