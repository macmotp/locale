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
 * Botswana
 */
final class BW extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::BOTSWANA);
        $this->setCapital(CountryCapital::GABORONE);
        $this->setCode(CountryCode::BW);
        $this->setAlpha3Code('BWA');
        $this->setDialCode('+267');
        $this->setTld('.bw');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::BW);
        $this->setDefaultCurrency(CurrencyCode::BWP);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_GABORONE);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::BWP,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_GABORONE,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH, LanguageCode::TSWANA,]));
    }
}
