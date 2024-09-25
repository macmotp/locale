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
 *  Republic of the Congo
 */
final class CG extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::REPUBLIC_OF_THE_CONGO);
        $this->setCapital('Brazzaville');
        $this->setCode(Country::CG);
        $this->setAlpha3Code('COG');
        $this->setDialCode('+242');
        $this->setTld('.cg');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::XAF);
        $this->setDefaultTimezone(Timezone::AFRICA_BRAZZAVILLE);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XAF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_BRAZZAVILLE,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
