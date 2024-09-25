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
 * Uruguay
 */
final class UY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::URUGUAY);
        $this->setCapital('Montevideo');
        $this->setCode(Country::UY);
        $this->setAlpha3Code('URY');
        $this->setDialCode('+598');
        $this->setTld('.uy');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::UYU);
        $this->setDefaultTimezone(Timezone::AMERICA_MONTEVIDEO);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::UYU,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_MONTEVIDEO,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
