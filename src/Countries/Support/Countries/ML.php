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
 * Mali
 */
final class ML extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::MALI);
        $this->setCapital(CountryCapital::BAMAKO);
        $this->setCode(CountryCode::ML);
        $this->setAlpha3Code('MLI');
        $this->setDialCode('+223');
        $this->setTld('.ml');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::ML);
        $this->setDefaultCurrency(CurrencyCode::XOF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_BAMAKO);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::XOF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_BAMAKO,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
