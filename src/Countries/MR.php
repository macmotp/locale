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
 * Mauritania
 */
final class MR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::MAURITANIA);
        $this->setCapital('Nouakchott');
        $this->setCode(Country::MR);
        $this->setAlpha3Code('MRT');
        $this->setDialCode('+222');
        $this->setTld('.mr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MRU);
        $this->setDefaultTimezone(Timezone::AFRICA_NOUAKCHOTT);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::MRU,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_NOUAKCHOTT,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
