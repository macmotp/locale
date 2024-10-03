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
 * Mozambique
 */
final class MZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::MOZAMBIQUE);
        $this->setCapital(CountryCapital::MAPUTO);
        $this->setCode(CountryCode::MZ);
        $this->setAlpha3Code('MOZ');
        $this->setDialCode('+258');
        $this->setTld('.mz');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MZ);
        $this->setDefaultCurrency(CurrencyCode::MZN);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_MAPUTO);
        $this->setDefaultLanguage(LanguageCode::PORTUGUESE);
        $this->setCurrencies(new Collection([CurrencyCode::MZN,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_MAPUTO,]));
        $this->setLanguages(new Collection([LanguageCode::PORTUGUESE,]));
    }
}
