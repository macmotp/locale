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
 * Palestine
 */
final class PS extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::PALESTINE);
        $this->setCapital(CountryCapital::EAST_JERUSALEM);
        $this->setCode(CountryCode::PS);
        $this->setAlpha3Code('PSE');
        $this->setDialCode('+970');
        $this->setTld('.ps');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PS);
        $this->setDefaultCurrency(CurrencyCode::ILS);
        $this->setDefaultTimezone(TimezoneCode::ASIA_GAZA);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::ILS,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_GAZA, TimezoneCode::ASIA_HEBRON,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
