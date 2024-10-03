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
 * Dominican Republic
 */
final class DO_ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::DOMINICAN_REPUBLIC);
        $this->setCapital(CountryCapital::SANTO_DOMINGO);
        $this->setCode(CountryCode::DO);
        $this->setAlpha3Code('DOM');
        $this->setDialCode('+1809');
        $this->setTld('.do');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::DO);
        $this->setDefaultCurrency(CurrencyCode::DOP);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_SANTO_DOMINGO);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::DOP,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_SANTO_DOMINGO,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
