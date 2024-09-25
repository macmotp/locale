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
 *  Falkland Islands
 */
final class FK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::FALKLAND_ISLANDS);
        $this->setCapital('Stanley');
        $this->setCode(Country::FK);
        $this->setAlpha3Code('FLK');
        $this->setDialCode('+500');
        $this->setTld('.fk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::FKP);
        $this->setDefaultTimezone(Timezone::ATLANTIC_STANLEY);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::FKP,]));
        $this->setTimezones(new Collection([Timezone::ATLANTIC_STANLEY,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
