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
 *  Barbados
 */
final class BB extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::BARBADOS);
        $this->setCapital('Bridgetown');
        $this->setCode(Country::BB);
        $this->setAlpha3Code('BRB');
        $this->setDialCode('+1246');
        $this->setTld('.bb');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::BBD);
        $this->setDefaultTimezone(Timezone::AMERICA_BARBADOS);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::BBD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_BARBADOS,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
