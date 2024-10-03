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
 * Saint Lucia
 */
final class LC extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::SAINT_LUCIA);
        $this->setCapital(CountryCapital::CASTRIES);
        $this->setCode(CountryCode::LC);
        $this->setAlpha3Code('LCA');
        $this->setDialCode('+1758');
        $this->setTld('.lc');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LC);
        $this->setDefaultCurrency(CurrencyCode::XCD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_ST_LUCIA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::XCD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_ST_LUCIA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
