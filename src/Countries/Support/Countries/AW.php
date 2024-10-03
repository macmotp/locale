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
 * Aruba
 */
final class AW extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::ARUBA);
        $this->setCapital(CountryCapital::ORANJESTAD);
        $this->setCode(CountryCode::AW);
        $this->setAlpha3Code('ABW');
        $this->setDialCode('+297');
        $this->setTld('.aw');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::AW);
        $this->setDefaultCurrency(CurrencyCode::AWG);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_ARUBA);
        $this->setDefaultLanguage(LanguageCode::DUTCH);
        $this->setCurrencies(new Collection([CurrencyCode::AWG,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_ARUBA,]));
        $this->setLanguages(new Collection([LanguageCode::DUTCH, LanguageCode::PAPIAMENTO]));
    }
}
