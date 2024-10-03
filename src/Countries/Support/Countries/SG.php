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
 * Singapore
 */
final class SG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ASIA);
        $this->setName(CountryName::SINGAPORE);
        $this->setCapital(CountryCapital::SINGAPORE);
        $this->setCode(CountryCode::SG);
        $this->setAlpha3Code('SGP');
        $this->setDialCode('+65');
        $this->setTld('.sg');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SG);
        $this->setDefaultCurrency(CurrencyCode::SGD);
        $this->setDefaultTimezone(TimezoneCode::ASIA_SINGAPORE);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::BND, CurrencyCode::SGD,]));
        $this->setTimezones(new Collection([TimezoneCode::ASIA_SINGAPORE,]));
        $this->setLanguages(new Collection([
            LanguageCode::CHINESE,
            LanguageCode::ENGLISH,
            LanguageCode::MALAY,
            LanguageCode::TAMIL,
        ]));
    }
}
