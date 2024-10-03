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
 * Cameroon
 */
final class CM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::CAMEROON);
        $this->setCapital(CountryCapital::YAOUNDE);
        $this->setCode(CountryCode::CM);
        $this->setAlpha3Code('CMR');
        $this->setDialCode('+237');
        $this->setTld('.cm');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::CM);
        $this->setDefaultCurrency(CurrencyCode::XAF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_DOUALA);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XAF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_DOUALA,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH, LanguageCode::ENGLISH,]));
    }
}
