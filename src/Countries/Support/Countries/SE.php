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
 * Sweden
 */
final class SE extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::SWEDEN);
        $this->setCapital(CountryCapital::STOCKHOLM);
        $this->setCode(CountryCode::SE);
        $this->setAlpha3Code('SWE');
        $this->setDialCode('+46');
        $this->setTld('.se');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SE);
        $this->setDefaultCurrency(CurrencyCode::SEK);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_STOCKHOLM);
        $this->setDefaultLanguage(LanguageCode::SWEDISH);
        $this->setCurrencies(new Collection([CurrencyCode::SEK,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_STOCKHOLM,]));
        $this->setLanguages(new Collection([LanguageCode::SWEDISH,]));
    }
}
