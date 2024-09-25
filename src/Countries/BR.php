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
 *  Brazil
 */
final class BR extends AbstractCountry implements CountryInterface
{
    public function __construct()
    {
        $this->setContinent(Continent::SOUTH_AMERICA);
        $this->setName(Country::BRAZIL);
        $this->setCapital('Brasília');
        $this->setCode(Country::BR);
        $this->setAlpha3Code('BRA');
        $this->setDialCode('+55');
        $this->setTld('.br');
        $this->setDateFormat('d/m/Y');
        $this->setDefaultCurrency(Currency::BRL);
        $this->setDefaultTimezone(Timezone::AMERICA_SAO_PAULO);
        $this->setDefaultLanguage(Language::PORTUGUESE);
        $this->setCurrencies(new Collection([Currency::BRL,]));
        $this->setTimezones(new Collection([
            Timezone::AMERICA_ARAGUAINA,
            Timezone::AMERICA_BAHIA,
            Timezone::AMERICA_BELEM,
            Timezone::AMERICA_BOA_VISTA,
            Timezone::AMERICA_CAMPO_GRANDE,
            Timezone::AMERICA_CUIABA,
            Timezone::AMERICA_EIRUNEPE,
            Timezone::AMERICA_FORTALEZA,
            Timezone::AMERICA_MACEIO,
            Timezone::AMERICA_MANAUS,
            Timezone::AMERICA_NORONHA,
            Timezone::AMERICA_PORTO_VELHO,
            Timezone::AMERICA_RECIFE,
            Timezone::AMERICA_RIO_BRANCO,
            Timezone::AMERICA_SANTAREM,
            Timezone::AMERICA_SAO_PAULO,
        ]));
        $this->setLanguages(new Collection([Language::PORTUGUESE,]));
    }
}
