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
 * Guinea
 */
final class GN extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::GUINEA);
        $this->setCapital(CountryCapital::CONAKRY);
        $this->setCode(CountryCode::GN);
        $this->setAlpha3Code('GIN');
        $this->setDialCode('+224');
        $this->setTld('.gn');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GN);
        $this->setDefaultCurrency(CurrencyCode::GNF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_CONAKRY);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::GNF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_CONAKRY,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
