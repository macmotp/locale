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
 * Morocco
 */
final class MA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::MOROCCO);
        $this->setCapital(CountryCapital::RABAT);
        $this->setCode(CountryCode::MA);
        $this->setAlpha3Code('MAR');
        $this->setDialCode('+212');
        $this->setTld('.ma');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MA);
        $this->setDefaultCurrency(CurrencyCode::MAD);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_CASABLANCA);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::MAD,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_CASABLANCA,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC, LanguageCode::BERBER,]));
    }
}
