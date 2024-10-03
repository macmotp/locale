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
 * Democratic Republic of the Congo
 */
final class CD extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::DEMOCRATIC_REPUBLIC_OF_THE_CONGO);
        $this->setCapital(CountryCapital::KINSHASA);
        $this->setCode(CountryCode::CD);
        $this->setAlpha3Code('COD');
        $this->setDialCode('+243');
        $this->setTld('.cd');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::CD);
        $this->setDefaultCurrency(CurrencyCode::CDF);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_KINSHASA);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::CDF,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_KINSHASA,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
