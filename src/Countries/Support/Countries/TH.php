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
 * Thailand
 */
final class TH extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::THAILAND);
        $this->setCapital(CountryCapital::BANGKOK);
        $this->setCode(CountryCode::TH);
        $this->setAlpha3Code('THA');
        $this->setDialCode('+66');
        $this->setTld('.th');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::TH);
        $this->setDefaultCurrency(CurrencyCode::THB);
        $this->setDefaultTimezone(TimezoneCode::ASIA_BANGKOK);
        $this->setDefaultLanguage(LanguageCode::THAI);
        $this->setCurrencies(new Collection([CurrencyCode::THB,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_BANGKOK,]));
        $this->setLanguages(new Collection([LanguageCode::THAI,]));
    }
}
