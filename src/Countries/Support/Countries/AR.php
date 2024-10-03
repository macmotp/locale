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
 * Argentina
 */
final class AR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::ARGENTINA);
        $this->setCapital(CountryCapital::BUENOS_AIRES);
        $this->setCode(CountryCode::AR);
        $this->setAlpha3Code('ARG');
        $this->setDialCode('+54');
        $this->setTld('.ar');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::AR);
        $this->setDefaultCurrency(CurrencyCode::ARS);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_ARGENTINA_BUENOS_AIRES);
        $this->setDefaultLanguage(LanguageCode::SPANISH);
        $this->setCurrencies(new Collection([CurrencyCode::ARS,]));
        $this->setTimezones(new Collection([
            TimezoneCode::AMERICA_ARGENTINA_BUENOS_AIRES,
            TimezoneCode::AMERICA_ARGENTINA_CATAMARCA,
            TimezoneCode::AMERICA_ARGENTINA_CORDOBA,
            TimezoneCode::AMERICA_ARGENTINA_JUJUY,
            TimezoneCode::AMERICA_ARGENTINA_LA_RIOJA,
            TimezoneCode::AMERICA_ARGENTINA_MENDOZA,
            TimezoneCode::AMERICA_ARGENTINA_RIO_GALLEGOS,
            TimezoneCode::AMERICA_ARGENTINA_SALTA,
            TimezoneCode::AMERICA_ARGENTINA_SAN_JUAN,
            TimezoneCode::AMERICA_ARGENTINA_SAN_LUIS,
            TimezoneCode::AMERICA_ARGENTINA_TUCUMAN,
            TimezoneCode::AMERICA_ARGENTINA_USHUAIA,
        ]));
        $this->setLanguages(new Collection([LanguageCode::SPANISH,]));
    }
}
