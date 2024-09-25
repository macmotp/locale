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
 *  Ecuador
 */
final class EC extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::ECUADOR);
        $this->setCapital('Quito');
        $this->setCode(Country::EC);
        $this->setAlpha3Code('ECU');
        $this->setDialCode('+593');
        $this->setTld('.ec');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::AMERICA_GUAYAQUIL);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_GUAYAQUIL,
            Timezone::PACIFIC_GALAPAGOS,
        ]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
