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
 * Wallis and Futuna
 */
final class WF extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::WALLIS_AND_FUTUNA);
        $this->setCapital(CountryCapital::MATA_UTU);
        $this->setCode(CountryCode::WF);
        $this->setAlpha3Code('WLF');
        $this->setDialCode('+681');
        $this->setTld('.wf');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::WF);
        $this->setDefaultCurrency(CurrencyCode::XPF);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_WALLIS);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XPF,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_WALLIS,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
