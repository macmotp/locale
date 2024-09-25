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
 *  Ethiopia
 */
final class ET extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::ETHIOPIA);
        $this->setCapital('Addis Ababa');
        $this->setCode(Country::ET);
        $this->setAlpha3Code('ETH');
        $this->setDialCode('+251');
        $this->setTld('.et');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ETB);
        $this->setDefaultTimezone(Timezone::AFRICA_ADDIS_ABABA);
        $this->setDefaultLanguage(Language::AMHARIC);
        $this->setCurrencies(new Collection([Currency::ETB,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_ADDIS_ABABA,]));
        $this->setLanguages(new Collection([Language::AMHARIC,]));
    }
}
