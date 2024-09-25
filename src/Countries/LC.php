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
 * Saint Lucia
 */
final class LC extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::SAINT_LUCIA);
        $this->setCapital('Castries');
        $this->setCode(Country::LC);
        $this->setAlpha3Code('LCA');
        $this->setDialCode('+1758');
        $this->setTld('.lc');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XCD);
        $this->setDefaultTimezone(Timezone::AMERICA_ST_LUCIA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::XCD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_ST_LUCIA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
