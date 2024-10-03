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
 * Virgin Islands (British)
 */
final class VG extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::VIRGIN_ISLANDS_BRITISH);
        $this->setCapital(CountryCapital::ROAD_TOWN);
        $this->setCode(CountryCode::VG);
        $this->setAlpha3Code('VGB');
        $this->setDialCode('+1284');
        $this->setTld('.vg');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::VG);
        $this->setDefaultCurrency(CurrencyCode::USD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_TORTOLA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::USD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_TORTOLA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
