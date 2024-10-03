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
 * Pitcairn Islands
 */
final class PN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::PITCAIRN_ISLANDS);
        $this->setCapital(CountryCapital::ADAMSTOWN);
        $this->setCode(CountryCode::PN);
        $this->setAlpha3Code('PCN');
        $this->setDialCode('+64');
        $this->setTld('.pn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PN);
        $this->setDefaultCurrency(CurrencyCode::NZD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_PITCAIRN);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::NZD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_PITCAIRN,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
