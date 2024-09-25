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
 * Somalia
 */
final class SO extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::AFRICA);
        $this->setName(Country::SOMALIA);
        $this->setCapital('Mogadishu');
        $this->setCode(Country::SO);
        $this->setAlpha3Code('SOM');
        $this->setDialCode('+252');
        $this->setTld('.so');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::SOS);
        $this->setDefaultTimezone(Timezone::AFRICA_MOGADISHU);
        $this->setDefaultLanguage(Language::SOMALI);
        $this->setCurrencies(new Collection([Currency::SOS,]));
        $this->setTimezones(new Collection([Timezone::AFRICA_MOGADISHU,]));
        $this->setLanguages(new Collection([Language::ARABIC, Language::SOMALI,]));
    }
}
