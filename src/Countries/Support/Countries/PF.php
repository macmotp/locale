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
 * French Polynesia
 */
final class PF extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::FRENCH_POLYNESIA);
        $this->setCapital(CountryCapital::PAPEETE);
        $this->setCode(CountryCode::PF);
        $this->setAlpha3Code('PYF');
        $this->setDialCode('+689');
        $this->setTld('.pf');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PF);
        $this->setDefaultCurrency(CurrencyCode::XPF);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_TAHITI);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XPF,]));
        $this->setTimezones(new Collection([
            TimezoneCode::PACIFIC_GAMBIER,
            TimezoneCode::PACIFIC_MARQUESAS,
            TimezoneCode::PACIFIC_TAHITI,
        ]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
