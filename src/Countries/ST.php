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
 * São Tomé and Príncipe
 */
final class ST extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SAO_TOME_AND_PRINCIPE);
        $this->setCapital('São Tomé');
        $this->setCode(Country::ST);
        $this->setAlpha3Code('STP');
        $this->setDialCode('+239');
        $this->setTld('.st');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::STN);
        $this->setDefaultTimezone(Timezone::AFRICA_SAO_TOME);
        $this->setDefaultLanguage(Language::PORTUGUESE);
        $this->setCurrencies(new Collection([Currency::STN,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_SAO_TOME,]));
        $this->setLanguages(new Collection([Language::PORTUGUESE,]));
    }
}
