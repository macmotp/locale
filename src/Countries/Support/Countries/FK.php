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
 * Falkland Islands
 */
final class FK extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::FALKLAND_ISLANDS);
        $this->setCapital(CountryCapital::STANLEY);
        $this->setCode(CountryCode::FK);
        $this->setAlpha3Code('FLK');
        $this->setDialCode('+500');
        $this->setTld('.fk');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::FK);
        $this->setDefaultCurrency(CurrencyCode::FKP);
        $this->setDefaultTimezone(TimezoneCode::ATLANTIC_STANLEY);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::FKP,]));
        $this->setTimezones(new Collection([TimezoneCode::ATLANTIC_STANLEY,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
