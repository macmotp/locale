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
 * Jamaica
 */
final class JM extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::JAMAICA);
        $this->setCapital(CountryCapital::KINGSTON);
        $this->setCode(CountryCode::JM);
        $this->setAlpha3Code('JAM');
        $this->setDialCode('+1876');
        $this->setTld('.jm');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::JM);
        $this->setDefaultCurrency(CurrencyCode::JMD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_JAMAICA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::JMD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_JAMAICA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
