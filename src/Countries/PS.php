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
 * Palestine
 */
final class PS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::PALESTINE);
        $this->setCapital('East Jerusalem');
        $this->setCode(Country::PS);
        $this->setAlpha3Code('PSE');
        $this->setDialCode('+970');
        $this->setTld('.ps');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ILS);
        $this->setDefaultTimezone(Timezone::ASIA_GAZA);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::ILS,]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_GAZA,
            Timezone::ASIA_HEBRON,
        ]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
