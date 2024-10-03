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
 * Bermuda
 */
final class BM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::BERMUDA);
        $this->setCapital(CountryCapital::HAMILTON);
        $this->setCode(CountryCode::BM);
        $this->setAlpha3Code('BMU');
        $this->setDialCode('+1441');
        $this->setTld('.bm');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::BM);
        $this->setDefaultCurrency(CurrencyCode::BMD);
        $this->setDefaultTimezone(TimezoneCode::ATLANTIC_BERMUDA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::BMD,]));
        $this->setTimezones(new Collection([TimezoneCode::ATLANTIC_BERMUDA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
