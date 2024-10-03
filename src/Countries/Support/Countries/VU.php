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
 * Vanuatu
 */
final class VU extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::VANUATU);
        $this->setCapital(CountryCapital::PORT_VILA);
        $this->setCode(CountryCode::VU);
        $this->setAlpha3Code('VUT');
        $this->setDialCode('+678');
        $this->setTld('.vu');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::VU);
        $this->setDefaultCurrency(CurrencyCode::VUV);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_EFATE);
        $this->setDefaultLanguage(LanguageCode::BISLAMA);
        $this->setCurrencies(new Collection([CurrencyCode::VUV,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_EFATE,]));
        $this->setLanguages(new Collection([
            LanguageCode::BISLAMA,
            LanguageCode::ENGLISH,
            LanguageCode::FRENCH,
        ]));
    }
}
