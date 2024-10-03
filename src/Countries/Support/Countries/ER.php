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
 * Eritrea
 */
final class ER extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::ERITREA);
        $this->setCapital(CountryCapital::ASMARA);
        $this->setCode(CountryCode::ER);
        $this->setAlpha3Code('ERI');
        $this->setDialCode('+291');
        $this->setTld('.er');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::ER);
        $this->setDefaultCurrency(CurrencyCode::ERN);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_ASMARA);
        $this->setDefaultLanguage(LanguageCode::TIGRINYA);
        $this->setCurrencies(new Collection([CurrencyCode::ERN,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_ASMARA,]));
        $this->setLanguages(new Collection([
            LanguageCode::ARABIC,
            LanguageCode::TIGRINYA,
            LanguageCode::TIGRE,
        ]));
    }
}
