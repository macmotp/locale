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
 * Malawi
 */
final class MW extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::MALAWI);
        $this->setCapital(CountryCapital::LILONGWE);
        $this->setCode(CountryCode::MW);
        $this->setAlpha3Code('MWI');
        $this->setDialCode('+265');
        $this->setTld('.mw');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MW);
        $this->setDefaultCurrency(CurrencyCode::MWK);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_BLANTYRE);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::MWK,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_BLANTYRE,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
