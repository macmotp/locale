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
 * South Sudan
 */
final class SS extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::SOUTH_SUDAN);
        $this->setCapital(CountryCapital::JUBA);
        $this->setCode(CountryCode::SS);
        $this->setAlpha3Code('SSD');
        $this->setDialCode('+211');
        $this->setTld('.ss');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SS);
        $this->setDefaultCurrency(CurrencyCode::SSP);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_JUBA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::SSP,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_JUBA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
