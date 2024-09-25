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
 * Montserrat
 */
final class MS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::MONTSERRAT);
        $this->setCapital('Plymouth');
        $this->setCode(Country::MS);
        $this->setAlpha3Code('MSR');
        $this->setDialCode('+1664');
        $this->setTld('.ms');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XCD);
        $this->setDefaultTimezone(Timezone::AMERICA_MONTSERRAT);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::XCD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_MONTSERRAT,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
