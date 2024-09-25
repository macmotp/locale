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
 * Oman
 */
final class OM extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::OMAN);
        $this->setCapital('Muscat');
        $this->setCode(Country::OM);
        $this->setAlpha3Code('OMN');
        $this->setDialCode('+968');
        $this->setTld('.om');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::OMR);
        $this->setDefaultTimezone(Timezone::ASIA_MUSCAT);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([Currency::OMR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_MUSCAT,]));
        $this->setLanguages(new Collection([Language::ARABIC,]));
    }
}
