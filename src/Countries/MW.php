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
 * Malawi
 */
final class MW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::MALAWI);
        $this->setCapital('Lilongwe');
        $this->setCode(Country::MW);
        $this->setAlpha3Code('MWI');
        $this->setDialCode('+265');
        $this->setTld('.mw');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MWK);
        $this->setDefaultTimezone(Timezone::AFRICA_BLANTYRE);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::MWK,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_BLANTYRE,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
