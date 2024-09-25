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
 * Sint Maarten
 */
final class SX extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::SINT_MAARTEN);
        $this->setCapital('Philipsburg');
        $this->setCode(Country::SX);
        $this->setAlpha3Code('SXM');
        $this->setDialCode('+1721');
        $this->setTld('.sx');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::ANG);
        $this->setDefaultTimezone(Timezone::AMERICA_LOWER_PRINCES);
        $this->setDefaultLanguage(Language::DUTCH);
        $this->setCurrencies(new Collection([Currency::ANG,]));
        $this->setTimezones(new Collection([Timezone::AMERICA_LOWER_PRINCES,]));
        $this->setLanguages(new Collection([Language::DUTCH,]));
    }
}
