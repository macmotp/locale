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
 *  Central African Republic
 */
final class CF extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::CENTRAL_AFRICAN_REPUBLIC);
        $this->setCapital('Bangui');
        $this->setCode(Country::CF);
        $this->setAlpha3Code('CAF');
        $this->setDialCode('+236');
        $this->setTld('.cf');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::XAF);
        $this->setDefaultTimezone(Timezone::AFRICA_BANGUI);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XAF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_BANGUI,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
