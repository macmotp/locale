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
 * Niger
 */
final class NE extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::NIGER);
        $this->setCapital('Niamey');
        $this->setCode(Country::NE);
        $this->setAlpha3Code('NER');
        $this->setDialCode('+227');
        $this->setTld('.ne');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XOF);
        $this->setDefaultTimezone(Timezone::AFRICA_NIAMEY);
        $this->setDefaultLanguage(Language::FRENCH);
        $this->setCurrencies(new Collection([Currency::XOF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_NIAMEY,]));
        $this->setLanguages(new Collection([Language::FRENCH,]));
    }
}
