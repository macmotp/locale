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
 * Barbados
 */
final class BB extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::BARBADOS);
        $this->setCapital(CountryCapital::BRIDGETOWN);
        $this->setCode(CountryCode::BB);
        $this->setAlpha3Code('BRB');
        $this->setDialCode('+1246');
        $this->setTld('.bb');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::BB);
        $this->setDefaultCurrency(CurrencyCode::BBD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_BARBADOS);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::BBD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_BARBADOS,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
