<?php

namespace Macmotp\Countries;

use Macmotp\Continent;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Country;
use Macmotp\Language;
use Macmotp\Timezone;

final class US extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName('United States of America');
        $this->setCapital('Washington');
        $this->setCode(Country::US);
        $this->setAlpha3Code('USA');
        $this->setDialCode('+1');
        $this->setDefaultCurrency('USD');
        $this->setDefaultTimezone(Timezone::AMERICA_NEW_YORK);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([
            'USD',
        ]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_NEW_YORK,
        ]));
        $this->setLanguages(new Collection([
            Language::ENGLISH,
        ]));
    }
}
