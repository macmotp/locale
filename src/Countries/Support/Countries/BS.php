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
 * Bahamas
 */
final class BS extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::BAHAMAS);
        $this->setCapital(CountryCapital::NASSAU);
        $this->setCode(CountryCode::BS);
        $this->setAlpha3Code('BHS');
        $this->setDialCode('+1242');
        $this->setTld('.bs');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::BS);
        $this->setDefaultCurrency(CurrencyCode::BSD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_NASSAU);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::BSD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_NASSAU,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
