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
 *  Guinea-Bissau
 */
final class GW extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::GUINEA_BISSAU);
        $this->setCapital('Bissau');
        $this->setCode(Country::GW);
        $this->setAlpha3Code('GNB');
        $this->setDialCode('+245');
        $this->setTld('.gw');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::XOF);
        $this->setDefaultTimezone(Timezone::AFRICA_BISSAU);
        $this->setDefaultLanguage(Language::PORTUGUESE);
        $this->setCurrencies(new Collection([Currency::XOF,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_BISSAU,]));
        $this->setLanguages(new Collection([Language::PORTUGUESE,]));
    }
}
