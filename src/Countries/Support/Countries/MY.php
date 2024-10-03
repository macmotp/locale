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
 * Malaysia
 */
final class MY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::MALAYSIA);
        $this->setCapital(CountryCapital::KUALA_LUMPUR);
        $this->setCode(CountryCode::MY);
        $this->setAlpha3Code('MYS');
        $this->setDialCode('+60');
        $this->setTld('.my');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MY);
        $this->setDefaultCurrency(CurrencyCode::MYR);
        $this->setDefaultTimezone(TimezoneCode::ASIA_KUALA_LUMPUR);
        $this->setDefaultLanguage(LanguageCode::MALAY);
        $this->setCurrencies(new Collection([CurrencyCode::MYR,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_KUALA_LUMPUR, TimezoneCode::ASIA_KUCHING,]));
        $this->setLanguages(new Collection([LanguageCode::MALAY,]));
    }
}
