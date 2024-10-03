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
 * Malta
 */
final class MT extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::MALTA);
        $this->setCapital(CountryCapital::VALLETTA);
        $this->setCode(CountryCode::MT);
        $this->setAlpha3Code('MLT');
        $this->setDialCode('+356');
        $this->setTld('.mt');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MT);
        $this->setDefaultCurrency(CurrencyCode::EUR);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_MALTA);
        $this->setDefaultLanguage(LanguageCode::MALTESE);
        $this->setCurrencies(new Collection([CurrencyCode::EUR,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_MALTA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::MALTESE,]));
    }
}
