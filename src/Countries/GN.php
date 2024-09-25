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
 *  Guinea
 */
final class GN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::GUINEA);
        $this->setCapital('Conakry');
        $this->setCode(Country::GN);
        $this->setAlpha3Code('GIN');
        $this->setDialCode('+224');
        $this->setTld('.gn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::GNF);
        $this->setDefaultTimezone(Timezone::AFRICA_CONAKRY);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::GNF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_CONAKRY,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
