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
 * Kosovo
 */
final class XK extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::EUROPE);
        $this->setName(Country::KOSOVO);
        $this->setCapital('Pristina');
        $this->setCode(Country::XK);
        $this->setAlpha3Code('XKX');
        $this->setDialCode('+383');
        $this->setTld('.xk');
        $this->setDateFormat('d-m-Y');
        $this->setDefaultCurrency(Currency::EUR);
        $this->setDefaultTimezone(Timezone::EUROPE_BELGRADE);
        $this->setDefaultLanguage(Language::ALBANIAN);
        $this->setCurrencies(new Collection([Currency::EUR,]));
        $this->setTimezones(new Collection([Timezone::EUROPE_BELGRADE,]));
        $this->setLanguages(new Collection([Language::ALBANIAN, Language::SERBIAN,]));
    }
}
