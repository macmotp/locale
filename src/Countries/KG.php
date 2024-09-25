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
 * Kyrgyzstan
 */
final class KG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::KYRGYZSTAN);
        $this->setCapital('Bishkek');
        $this->setCode(Country::KG);
        $this->setAlpha3Code('KGZ');
        $this->setDialCode('+996');
        $this->setTld('.kg');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KGS);
        $this->setDefaultTimezone(Timezone::ASIA_BISHKEK);
        $this->setDefaultLanguage(Language::RUSSIAN);
        $this->setCurrencies(new Collection([Currency::KGS,]));
        $this->setTimezones(new Collection([Timezone::ASIA_BISHKEK,]));
        $this->setLanguages(new Collection([Language::KYRGYZ, Language::RUSSIAN,]));
    }
}
