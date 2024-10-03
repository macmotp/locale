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
 * South Georgia and the South Sandwich Islands
 */
final class GS extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::ANTARCTICA);
        $this->setName(CountryName::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS);
        $this->setCapital(CountryCapital::KING_EDWARD_POINT);
        $this->setCode(CountryCode::GS);
        $this->setAlpha3Code('SGS');
        $this->setDialCode('+500');
        $this->setTld('.gs');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GS);
        $this->setDefaultCurrency(CurrencyCode::GBP);
        $this->setDefaultTimezone(TimezoneCode::ATLANTIC_SOUTH_GEORGIA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::GBP,]));
        $this->setTimezones(new Collection([TimezoneCode::ATLANTIC_SOUTH_GEORGIA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
