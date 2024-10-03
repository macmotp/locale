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
 * Grenada
 */
final class GD extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::GRENADA);
        $this->setCapital(CountryCapital::ST_GEORGES);
        $this->setCode(CountryCode::GD);
        $this->setAlpha3Code('GRD');
        $this->setDialCode('+1473');
        $this->setTld('.gd');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::GD);
        $this->setDefaultCurrency(CurrencyCode::XCD);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_GRENADA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::XCD,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_GRENADA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
