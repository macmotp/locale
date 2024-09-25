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
 * Mozambique
 */
final class MZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::MOZAMBIQUE);
        $this->setCapital('Maputo');
        $this->setCode(Country::MZ);
        $this->setAlpha3Code('MOZ');
        $this->setDialCode('+258');
        $this->setTld('.mz');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MZN);
        $this->setDefaultTimezone(Timezone::AFRICA_MAPUTO);
        $this->setDefaultLanguage(Language::PORTUGUESE);
        $this->setCurrencies(new Collection([Currency::MZN,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_MAPUTO,]));
        $this->setLanguages(new Collection([Language::PORTUGUESE,]));
    }
}
