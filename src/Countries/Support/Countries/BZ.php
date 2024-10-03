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
 * Belize
 */
final class BZ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::BELIZE);
        $this->setCapital(CountryCapital::BELMOPAN);
        $this->setCode(CountryCode::BZ);
        $this->setAlpha3Code('BLZ');
        $this->setDialCode('+501');
        $this->setTld('.bz');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::BZ);
        $this->setDefaultCurrency(CurrencyCode::BZD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_BELIZE);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::BZD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_BELIZE,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
