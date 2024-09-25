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
 *  Equatorial Guinea
 */
final class GQ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::EQUATORIAL_GUINEA);
        $this->setCapital('Malabo');
        $this->setCode(Country::GQ);
        $this->setAlpha3Code('GNQ');
        $this->setDialCode('+240');
        $this->setTld('.gq');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XAF);
        $this->setDefaultTimezone(Timezone::AFRICA_MALABO);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([Currency::XAF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_MALABO,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
