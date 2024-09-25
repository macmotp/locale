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
 * Morocco
 */
final class MA extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::MOROCCO);
        $this->setCapital('Rabat');
        $this->setCode(Country::MA);
        $this->setAlpha3Code('MAR');
        $this->setDialCode('+212');
        $this->setTld('.ma');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MAD);
        $this->setDefaultTimezone(Timezone::AFRICA_CASABLANCA);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::MAD,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_CASABLANCA,]));
        $this->setLanguages(new Collection([
            Language::ARABIC,
            Language::BERBER,
        ]));
    }
}
