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
 * Angola
 */
final class AO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::ANGOLA);
        $this->setCapital('Luanda');
        $this->setCode(Country::AO);
        $this->setAlpha3Code('AGO');
        $this->setDialCode('+244');
        $this->setTld('.ao');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::AOA);
        $this->setDefaultTimezone(Timezone::AFRICA_LUANDA);
        $this->setDefaultLanguage(Language::PORTUGUESE);
        $this->setCurrencies(new Collection([Currency::AOA,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_LUANDA,]));
        $this->setLanguages(new Collection([Language::PORTUGUESE,]));
    }
}
