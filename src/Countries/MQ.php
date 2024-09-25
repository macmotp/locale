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
 * Martinique
 */
final class MQ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::MARTINIQUE);
        $this->setCapital('Fort-de-France');
        $this->setCode(Country::MQ);
        $this->setAlpha3Code('MTQ');
        $this->setDialCode('+596');
        $this->setTld('.mq');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::AMERICA_MARTINIQUE);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_MARTINIQUE,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
