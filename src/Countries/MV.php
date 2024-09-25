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
 * Maldives
 */
final class MV extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::MALDIVES);
        $this->setCapital('Malé');
        $this->setCode(Country::MV);
        $this->setAlpha3Code('MDV');
        $this->setDialCode('+960');
        $this->setTld('.mv');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MVR);
        $this->setDefaultTimezone(Timezone::INDIAN_MALDIVES);
        $this->setDefaultLanguage(Language::DHIVEHI);
        $this->setCurrencies(new Collection([Currency::MVR,]));
        $this->setTimezones(new Collection([Timezone::INDIAN_MALDIVES,]));
        $this->setLanguages(new Collection([Language::DHIVEHI,]));
    }
}
