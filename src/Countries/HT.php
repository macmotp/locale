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
 *  Haiti
 */
final class HT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::HAITI);
        $this->setCapital('Port-au-Prince');
        $this->setCode(Country::HT);
        $this->setAlpha3Code('HTI');
        $this->setDialCode('+509');
        $this->setTld('.ht');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::HTG);
        $this->setDefaultTimezone(Timezone::AMERICA_PORT_AU_PRINCE);
        $this->setDefaultLanguage(Language::HAITIAN_CREOLE);
        $this->setCurrencies(new Collection([Currency::HTG,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_PORT_AU_PRINCE,]));
        $this->setLanguages(new Collection([
            Language::FRENCH,
            Language::HAITIAN_CREOLE,
        ]));
    }
}
