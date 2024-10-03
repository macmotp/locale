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
 * Saint Vincent and the Grenadines
 */
final class VC extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::SAINT_VINCENT_AND_THE_GRENADINES);
        $this->setCapital(CountryCapital::KINGSTOWN);
        $this->setCode(CountryCode::VC);
        $this->setAlpha3Code('VCT');
        $this->setDialCode('+1784');
        $this->setTld('.vc');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::VC);
        $this->setDefaultCurrency(CurrencyCode::XCD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_ST_VINCENT);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::XCD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_ST_VINCENT,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
