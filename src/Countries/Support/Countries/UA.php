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
 * Ukraine
 */
final class UA extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::UKRAINE);
        $this->setCapital(CountryCapital::KYIV);
        $this->setCode(CountryCode::UA);
        $this->setAlpha3Code('UKR');
        $this->setDialCode('+380');
        $this->setTld('.ua');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::UA);
        $this->setDefaultCurrency(CurrencyCode::UAH);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_KYIV);
        $this->setDefaultLanguage(LanguageCode::UKRAINIAN);
        $this->setCurrencies(new Collection([CurrencyCode::UAH,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_KYIV,]));
        $this->setLanguages(new Collection([LanguageCode::UKRAINIAN,]));
    }
}
