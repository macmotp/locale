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
 * Seychelles
 */
final class SC extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SEYCHELLES);
        $this->setCapital(CountryCapital::VICTORIA);
        $this->setCode(CountryCode::SC);
        $this->setAlpha3Code('SYC');
        $this->setDialCode('+248');
        $this->setTld('.sc');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SC);
        $this->setDefaultCurrency(CurrencyCode::SCR);
        $this->setDefaultTimezone(TimezoneCode::INDIAN_MAHE);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::SCR,]));
        $this->setTimezones(new Collection([TimezoneCode::INDIAN_MAHE,]));
        $this->setLanguages(new Collection([
            LanguageCode::ENGLISH,
            LanguageCode::FRENCH,
            LanguageCode::SEYCHELLOIS_CREOLE,
        ]));
    }
}
