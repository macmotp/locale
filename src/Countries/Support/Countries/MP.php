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
 * Northern Mariana Islands
 */
final class MP extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::OCEANIA);
        $this->setName(CountryName::NORTHERN_MARIANA_ISLANDS);
        $this->setCapital(CountryCapital::SAIPAN);
        $this->setCode(CountryCode::MP);
        $this->setAlpha3Code('MNP');
        $this->setDialCode('+1670');
        $this->setTld('.mp');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MP);
        $this->setDefaultCurrency(CurrencyCode::USD);
        $this->setDefaultTimezone(TimezoneCode::PACIFIC_SAIPAN);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::USD,]));
        $this->setTimezones(new Collection([TimezoneCode::PACIFIC_SAIPAN,]));
        $this->setLanguages(new Collection([
            LanguageCode::CAROLINIAN,
            LanguageCode::CHAMORRO,
            LanguageCode::ENGLISH,
        ]));
    }
}
