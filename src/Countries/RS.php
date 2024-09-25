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
 * Serbia
 */
final class RS extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::SERBIA);
        $this->setCapital('Belgrade');
        $this->setCode(Country::RS);
        $this->setAlpha3Code('SRB');
        $this->setDialCode('+381');
        $this->setTld('.rs');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::RSD);
        $this->setDefaultTimezone(Timezone::EUROPE_BELGRADE);
        $this->setDefaultLanguage(Language::SERBIAN);
        $this->setCurrencies(new Collection([Currency::RSD,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_BELGRADE,]));
        $this->setLanguages(new Collection([Language::SERBIAN,]));
    }
}
