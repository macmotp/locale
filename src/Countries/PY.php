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
 * Paraguay
 */
final class PY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::PARAGUAY);
        $this->setCapital('Asunción');
        $this->setCode(Country::PY);
        $this->setAlpha3Code('PRY');
        $this->setDialCode('+595');
        $this->setTld('.py');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::PYG);
        $this->setDefaultTimezone(Timezone::AMERICA_ASUNCION);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::PYG,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_ASUNCION,]));
        $this->setLanguages(new Collection([Language::GUARANI, Language::SPANISH,]));
    }
}
