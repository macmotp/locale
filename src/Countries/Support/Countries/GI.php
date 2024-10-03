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
 * Gibraltar
 */
final class GI extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::GIBRALTAR);
        $this->setCapital(CountryCapital::GIBRALTAR);
        $this->setCode(CountryCode::GI);
        $this->setAlpha3Code('GIB');
        $this->setDialCode('+350');
        $this->setTld('.gi');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GI);
        $this->setDefaultCurrency(CurrencyCode::GIP);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_GIBRALTAR);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::GIP,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_GIBRALTAR,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
