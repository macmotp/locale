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
 *  Belize
 */
final class BZ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::BELIZE);
        $this->setCapital('Belmopan');
        $this->setCode(Country::BZ);
        $this->setAlpha3Code('BLZ');
        $this->setDialCode('+501');
        $this->setTld('.bz');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::BZD);
        $this->setDefaultTimezone(Timezone::AMERICA_BELIZE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::BZD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_BELIZE,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
