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
 * Philippines
 */
final class PH extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::PHILIPPINES);
        $this->setCapital('Manila');
        $this->setCode(Country::PH);
        $this->setAlpha3Code('PHL');
        $this->setDialCode('+63');
        $this->setTld('.ph');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::PHP);
        $this->setDefaultTimezone(Timezone::ASIA_MANILA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::PHP,]));
        $this->setTimezones(new Collection([Timezone::ASIA_MANILA,]));
        $this->setLanguages(new Collection([Language::ENGLISH, Language::FILIPINO,]));
    }
}
