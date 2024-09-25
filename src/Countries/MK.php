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
 * North Macedonia
 */
final class MK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::NORTH_MACEDONIA);
        $this->setCapital('Skopje');
        $this->setCode(Country::MK);
        $this->setAlpha3Code('MKD');
        $this->setDialCode('+389');
        $this->setTld('.mk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::MKD);
        $this->setDefaultTimezone(Timezone::EUROPE_SKOPJE);
        $this->setDefaultLanguage(Language::MACEDONIAN);
        $this->setCurrencies(new Collection([Currency::MKD,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_SKOPJE,]));
        $this->setLanguages(new Collection([Language::MACEDONIAN, Language::ALBANIAN,]));
    }
}
