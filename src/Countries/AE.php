<?php

namespace Macmotp\Countries;

use Macmotp\Continent;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Country;
use Macmotp\Language;
use Macmotp\Timezone;

/**
 * United Arab Emirates
 */
final class AE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName('United Arab Emirates');
        $this->setCapital('Abu Dhabi');
        $this->setCode(Country::AE);
        $this->setAlpha3Code('ARE');
        $this->setDialCode('+971');
        $this->setTld('.ae');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency('AED');
        $this->setDefaultTimezone(Timezone::ASIA_DUBAI);
        $this->setDefaultLanguage(Language::ARABIC);
        $this->setCurrencies(new Collection([
            'EUR',
        ]));
        $this->setTimezones(new Collection([
            Timezone::ASIA_DUBAI,
        ]));
        $this->setLanguages(new Collection([
            Language::ARABIC,
        ]));
    }
}
