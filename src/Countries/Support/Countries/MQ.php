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
 * Martinique
 */
final class MQ extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::NORTH_AMERICA);
        $this->setName(CountryName::MARTINIQUE);
        $this->setCapital(CountryCapital::FORT_DE_FRANCE);
        $this->setCode(CountryCode::MQ);
        $this->setAlpha3Code('MTQ');
        $this->setDialCode('+596');
        $this->setTld('.mq');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MQ);
        $this->setDefaultCurrency(CurrencyCode::EUR);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_MARTINIQUE);
        $this->setDefaultLanguage(LanguageCode::FRENCH);
        $this->setCurrencies(new Collection([CurrencyCode::EUR,]));
        $this->setTimezones(new Collection([TimezoneCode::AMERICA_MARTINIQUE,]));
        $this->setLanguages(new Collection([LanguageCode::FRENCH,]));
    }
}
