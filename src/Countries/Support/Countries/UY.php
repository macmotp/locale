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
 * Uruguay
 */
final class UY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::URUGUAY);
        $this->setCapital(CountryCapital::MONTEVIDEO);
        $this->setCode(CountryCode::UY);
        $this->setAlpha3Code('URY');
        $this->setDialCode('+598');
        $this->setTld('.uy');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::UY);
        $this->setDefaultCurrency(CurrencyCode::UYU);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_MONTEVIDEO);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::UYU,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_MONTEVIDEO,]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
