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
 * Portugal
 */
final class PT extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::PORTUGAL);
        $this->setCapital('Lisbon');
        $this->setCode(Country::PT);
        $this->setAlpha3Code('PRT');
        $this->setDialCode('+351');
        $this->setTld('.pt');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_LISBON);
        $this->setDefaultLanguage(Language::PORTUGUESE);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([
            Timezone::ATLANTIC_AZORES,
            Timezone::ATLANTIC_MADEIRA,
            Timezone::EUROPE_LISBON,
        ]));
        $this->setLanguages(new Collection([Language::PORTUGUESE,]));
    }
}
