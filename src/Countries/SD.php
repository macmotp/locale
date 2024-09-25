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
 * Sudan
 */
final class SD extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SUDAN);
        $this->setCapital('Khartoum');
        $this->setCode(Country::SD);
        $this->setAlpha3Code('SDN');
        $this->setDialCode('+249');
        $this->setTld('.sd');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SDG);
        $this->setDefaultTimezone(Timezone::AFRICA_KHARTOUM);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::SDG,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_KHARTOUM,]));
        $this->setLanguages(new Collection([Language::ARABIC, Language::ENGLISH,]));
    }
}
