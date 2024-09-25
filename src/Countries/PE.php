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
 * Peru
 */
final class PE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::PERU);
        $this->setCapital('Lima');
        $this->setCode(Country::PE);
        $this->setAlpha3Code('PER');
        $this->setDialCode('+51');
        $this->setTld('.pe');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::PEN);
        $this->setDefaultTimezone(Timezone::AMERICA_LIMA);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::PEN,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_LIMA,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
