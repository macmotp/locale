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
 * Albania
 */
final class AL extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::ALBANIA);
        $this->setCapital(CountryCapital::TIRANA);
        $this->setCode(CountryCode::AL);
        $this->setAlpha3Code('ALB');
        $this->setDialCode('+355');
        $this->setTld('.al');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::AL);
        $this->setDefaultCurrency(CurrencyCode::ALL);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_TIRANE);
        $this->setDefaultLanguage(LanguageCode::ALBANIAN);
        $this->setCurrencies(new Collection([CurrencyCode::ALL,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_TIRANE,]));
        $this->setLanguages(new Collection([LanguageCode::ALBANIAN,]));
    }
}
