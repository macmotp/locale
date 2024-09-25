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
 * Viet Nam
 */
final class VN extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::ASIA);
        $this->setName(Country::VIET_NAM);
        $this->setCapital('Hanoi');
        $this->setCode(Country::VN);
        $this->setAlpha3Code('VNM');
        $this->setDialCode('+84');
        $this->setTld('.vn');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::VND);
        $this->setDefaultTimezone(Timezone::ASIA_HO_CHI_MINH);
        $this->setDefaultLanguage(Language::VIETNAMESE);
        $this->setCurrencies(new Collection([Currency::VND,]));
        $this->setTimezones(new Collection([Timezone::ASIA_HO_CHI_MINH,]));
        $this->setLanguages(new Collection([Language::VIETNAMESE,]));
    }
}
