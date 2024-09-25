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
 *  Hungary
 */
final class HU extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::HUNGARY);
        $this->setCapital('Budapest');
        $this->setCode(Country::HU);
        $this->setAlpha3Code('HUN');
        $this->setDialCode('+36');
        $this->setTld('.hu');
        $this->setDateFormat('Y. m. d.');
        $this->setDefaultCurrency(Currency::HUF);
        $this->setDefaultTimezone(Timezone::EUROPE_BUDAPEST);
        $this->setDefaultLanguage(Language::HUNGARIAN);
        $this->setCurrencies(new Collection([Currency::HUF,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_BUDAPEST,]));
        $this->setLanguages(new Collection([Language::HUNGARIAN,]));
    }
}
