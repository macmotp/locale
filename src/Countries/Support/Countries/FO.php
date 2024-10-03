<?php

namespace Macmotp\Countries\Support\Countries;

use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Countries\Support\AbstractCountry;
use Macmotp\Countries\Support\Collection;
use Macmotp\Countries\Support\CountryCapital;
use Macmotp\Countries\Support\CountryCode;
use Macmotp\Countries\Support\CountryFlag;
use Macmotp\Countries\Support\CountryInterface;
use Macmotp\Countries\Support\CountryName;
use Macmotp\Currencies\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use Macmotp\Languages\Support\LanguageCode;
use Macmotp\Timezones\Exceptions\InvalidTimezoneCodeException;
use Macmotp\Timezones\Support\TimezoneCode;

/**
 * Faroe Islands
 */
final class FO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::FAROE_ISLANDS);
        $this->setCapital(CountryCapital::TORSHAVN);
        $this->setCode(CountryCode::FO);
        $this->setAlpha3Code('FRO');
        $this->setDialCode('+298');
        $this->setTld('.fo');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::FO);
        $this->setDefaultCurrency(CurrencyCode::DKK);
        $this->setDefaultTimezone(TimezoneCode::ATLANTIC_FAROE);
        $this->setDefaultLanguage(LanguageCode::FAROESE);
        $this->setCurrencies(new Collection([CurrencyCode::DKK,]));
        $this->setTimezones(new Collection([TimezoneCode::ATLANTIC_FAROE,]));
        $this->setLanguages(new Collection([LanguageCode::DANISH, LanguageCode::FAROESE,]));
    }
}
