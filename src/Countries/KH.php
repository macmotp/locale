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
 * Cambodia
 */
final class KH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::CAMBODIA);
        $this->setCapital('Phnom Penh');
        $this->setCode(Country::KH);
        $this->setAlpha3Code('KHM');
        $this->setDialCode('+855');
        $this->setTld('.kh');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::KHR);
        $this->setDefaultTimezone(Timezone::ASIA_PHNOM_PENH);
        $this->setDefaultLanguage(Language::KHMER);
        $this->setCurrencies(new Collection([Currency::KHR,]));
        $this->setTimezones(new Collection([Timezone::ASIA_PHNOM_PENH,]));
        $this->setLanguages(new Collection([Language::KHMER,]));
    }
}
