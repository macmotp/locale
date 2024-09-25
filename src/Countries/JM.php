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
 * Jamaica
 */
final class JM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::JAMAICA);
        $this->setCapital('Kingston');
        $this->setCode(Country::JM);
        $this->setAlpha3Code('JAM');
        $this->setDialCode('+1876');
        $this->setTld('.jm');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::JMD);
        $this->setDefaultTimezone(Timezone::AMERICA_JAMAICA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::JMD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_JAMAICA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
