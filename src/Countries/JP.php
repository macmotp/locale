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
 * Japan
 */
final class JP extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::JAPAN);
        $this->setCapital('Tokyo');
        $this->setCode(Country::JP);
        $this->setAlpha3Code('JPN');
        $this->setDialCode('+81');
        $this->setTld('.jp');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::JPY);
        $this->setDefaultTimezone(Timezone::ASIA_TOKYO);
        $this->setDefaultLanguage(Language::JAPANESE);
        $this->setCurrencies(new Collection([Currency::JPY,]));
        $this->setTimezones(new Collection([Timezone::ASIA_TOKYO,]));
        $this->setLanguages(new Collection([Language::JAPANESE,]));
    }
}
