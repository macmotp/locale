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
 * Libya
 */
final class LY extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::LIBYA);
        $this->setCapital('Tripoli');
        $this->setCode(Country::LY);
        $this->setAlpha3Code('LBY');
        $this->setDialCode('+218');
        $this->setTld('.ly');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::LYD);
        $this->setDefaultTimezone(Timezone::AFRICA_TRIPOLI);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::LYD,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_TRIPOLI,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
