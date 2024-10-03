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
 * United Arab Emirates
 */
final class AE extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::UNITED_ARAB_EMIRATES);
        $this->setCapital(CountryCapital::ABU_DHABI);
        $this->setCode(CountryCode::AE);
        $this->setAlpha3Code('ARE');
        $this->setDialCode('+971');
        $this->setTld('.ae');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::AE);
        $this->setDefaultCurrency(CurrencyCode::AED);
        $this->setDefaultTimezone(TimezoneCode::ASIA_DUBAI);
        $this->setDefaultLanguage(LanguageCode::ARABIC);
        $this->setCurrencies(new Collection([CurrencyCode::AED,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_DUBAI,]));
        $this->setLanguages(new Collection([LanguageCode::ARABIC,]));
    }
}
