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
 * Cocos (Keeling) Islands
 */
final class CC extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::COCOS_KEELING_ISLANDS);
        $this->setCapital(CountryCapital::WEST_ISLAND);
        $this->setCode(CountryCode::CC);
        $this->setAlpha3Code('CCK');
        $this->setDialCode('+61');
        $this->setTld('.cc');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::CC);
        $this->setDefaultCurrency(CurrencyCode::AUD);
        $this->setDefaultTimezone(TimezoneCode::INDIAN_COCOS);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::AUD,]));
        $this->setTimezones(new Collection([TimezoneCode::INDIAN_COCOS,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
