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
 * Eswatini
 */
final class SZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::ESWATINI);
        $this->setCapital(CountryCapital::MBABANE);
        $this->setCode(CountryCode::SZ);
        $this->setAlpha3Code('SWZ');
        $this->setDialCode('+268');
        $this->setTld('.sz');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SZ);
        $this->setDefaultCurrency(CurrencyCode::SZL);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_MBABANE);
        $this->setDefaultLanguage(LanguageCode::SWAZI);
        $this->setCurrencies(new Collection([CurrencyCode::SZL,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_MBABANE,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::SWAZI,]));
    }
}
