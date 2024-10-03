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
 * Sint Maarten
 */
final class SX extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::SINT_MAARTEN);
        $this->setCapital(CountryCapital::PHILIPSBURG);
        $this->setCode(CountryCode::SX);
        $this->setAlpha3Code('SXM');
        $this->setDialCode('+1721');
        $this->setTld('.sx');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::SX);
        $this->setDefaultCurrency(CurrencyCode::ANG);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_LOWER_PRINCES);
        $this->setDefaultLanguage(LanguageCode::DUTCH);
        $this->setCurrencies(new Collection([CurrencyCode::ANG,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_LOWER_PRINCES,]));
        $this->setLanguages(new Collection([LanguageCode::DUTCH,]));
    }
}
