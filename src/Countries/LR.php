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
 * Liberia
 */
final class LR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::LIBERIA);
        $this->setCapital('Monrovia');
        $this->setCode(Country::LR);
        $this->setAlpha3Code('LBR');
        $this->setDialCode('+231');
        $this->setTld('.lr');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::LRD);
        $this->setDefaultTimezone(Timezone::AFRICA_MONROVIA);
        $this->setDefaultLanguage(Language::ENGLISH);
        $this->setCurrencies(new Collection([Currency::LRD,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_MONROVIA,]));
        $this->setLanguages(new Collection([Language::ENGLISH,]));
    }
}
