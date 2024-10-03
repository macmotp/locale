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
 * Paraguay
 */
final class PY extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::PARAGUAY);
        $this->setCapital(CountryCapital::ASUNCION);
        $this->setCode(CountryCode::PY);
        $this->setAlpha3Code('PRY');
        $this->setDialCode('+595');
        $this->setTld('.py');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::PY);
        $this->setDefaultCurrency(CurrencyCode::PYG);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_ASUNCION);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::PYG,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_ASUNCION,]));
        $this->setLanguages(new Collection([LanguageCode::GUARANI, LanguageCode::SPANISH,]));
    }
}
