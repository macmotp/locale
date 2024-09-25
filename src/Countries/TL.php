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
 * Timor-Leste
 */
final class TL extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::TIMOR_LESTE);
        $this->setCapital('Dili');
        $this->setCode(Country::TL);
        $this->setAlpha3Code('TLS');
        $this->setDialCode('+670');
        $this->setTld('.tl');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::USD);
        $this->setDefaultTimezone(Timezone::ASIA_DILI);
        $this->setDefaultLanguage(Language::TETUM);
        $this->setCurrencies(new Collection([Currency::USD,]));
        $this->setTimezones(new Collection([Timezone::ASIA_DILI,]));
        $this->setLanguages(new Collection([Language::TETUM, Language::PORTUGUESE,]));
    }
}
