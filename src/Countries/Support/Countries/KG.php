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
 * Kyrgyzstan
 */
final class KG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::KYRGYZSTAN);
        $this->setCapital(CountryCapital::BISHKEK);
        $this->setCode(CountryCode::KG);
        $this->setAlpha3Code('KGZ');
        $this->setDialCode('+996');
        $this->setTld('.kg');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::KG);
        $this->setDefaultCurrency(CurrencyCode::KGS);
        $this->setDefaultTimezone(TimezoneCode::ASIA_BISHKEK);
        $this->setDefaultLanguage(LanguageCode::RUSSIAN);
        $this->setCurrencies(new Collection([CurrencyCode::KGS,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_BISHKEK,]));
        $this->setLanguages(new Collection([LanguageCode::KYRGYZ, LanguageCode::RUSSIAN,]));
    }
}
