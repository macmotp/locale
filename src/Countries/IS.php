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
 *  Iceland
 */
final class IS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::ICELAND);
        $this->setCapital('Reykjavik');
        $this->setCode(Country::IS);
        $this->setAlpha3Code('ISL');
        $this->setDialCode('+354');
        $this->setTld('.is');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ISK);
        $this->setDefaultTimezone(Timezone::ATLANTIC_REYKJAVIK);
        $this->setDefaultLanguage(Language::ICELANDIC);
        $this->setCurrencies(new Collection([Currency::ISK,]));
        $this->setTimezones(new Collection([Timezone::ATLANTIC_REYKJAVIK,]));
        $this->setLanguages(new Collection([Language::ICELANDIC,]));
    }
}
