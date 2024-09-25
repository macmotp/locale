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
 *  Bonaire
 */
final class BQ extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::BONAIRE);
        $this->setCapital('Kralendijk');
        $this->setCode(Country::BQ);
        $this->setAlpha3Code('BES');
        $this->setDialCode('+599');
        $this->setTld('.bq');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::AMERICA_KRALENDIJK);
        $this->setDefaultLanguage(Language::DUTCH);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_KRALENDIJK,]));
        $this->setLanguages(new Collection([Language::DUTCH,]));
    }
}
