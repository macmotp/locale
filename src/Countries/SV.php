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
 * El Salvador
 */
final class SV extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::NORTH_AMERICA);
        $this->setName(Country::EL_SALVADOR);
        $this->setCapital('San Salvador');
        $this->setCode(Country::SV);
        $this->setAlpha3Code('SLV');
        $this->setDialCode('+503');
        $this->setTld('.sv');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::AMERICA_EL_SALVADOR);
        $this->setDefaultLanguage(Language::SPANISH);
        $this->setCurrencies(new Collection([
            Currency::BTC,
            Currency::USD,
        ]));
        $this->setTimezones(new Collection([Timezone::AMERICA_EL_SALVADOR,]));
        $this->setLanguages(new Collection([Language::SPANISH,]));
    }
}
