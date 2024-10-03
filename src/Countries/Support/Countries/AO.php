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
 * Angola
 */
final class AO extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::ANGOLA);
        $this->setCapital(CountryCapital::LUANDA);
        $this->setCode(CountryCode::AO);
        $this->setAlpha3Code('AGO');
        $this->setDialCode('+244');
        $this->setTld('.ao');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::AO);
        $this->setDefaultCurrency(CurrencyCode::AOA);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_LUANDA);
        $this->setDefaultLanguage(LanguageCode::PORTUGUESE);
        $this->setCurrencies(new Collection([CurrencyCode::AOA,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_LUANDA,]));
        $this->setLanguages(new Collection([LanguageCode::PORTUGUESE,]));
    }
}
