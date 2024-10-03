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
 * Marshall Islands
 */
final class MH extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::MARSHALL_ISLANDS);
        $this->setCapital(CountryCapital::MAJURO);
        $this->setCode(CountryCode::MH);
        $this->setAlpha3Code('MHL');
        $this->setDialCode('+692');
        $this->setTld('.mh');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MH);
        $this->setDefaultCurrency(CurrencyCode::USD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_KWAJALEIN);
        $this->setDefaultLanguage(LanguageCode::MARSHALLESE);
        $this->setCurrencies(new Collection([CurrencyCode::USD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_KWAJALEIN, TimezoneCode::PACIFIC_MAJURO,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::MARSHALLESE,]));
    }
}
