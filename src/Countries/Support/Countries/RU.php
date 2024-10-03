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
 * Russia
 */
final class RU extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::RUSSIA);
        $this->setCapital(CountryCapital::MOSCOW);
        $this->setCode(CountryCode::RU);
        $this->setAlpha3Code('RUS');
        $this->setDialCode('+7');
        $this->setTld('.ru');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::RU);
        $this->setDefaultCurrency(CurrencyCode::RUB);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_MOSCOW);
        $this->setDefaultLanguage(LanguageCode::RUSSIAN);
        $this->setCurrencies(new Collection([CurrencyCode::RUB,]));
        $this->setTimezones(new Collection([
            TimezoneCode::ASIA_ANADYR,
            TimezoneCode::ASIA_BARNAUL,
            TimezoneCode::ASIA_CHITA,
            TimezoneCode::ASIA_IRKUTSK,
            TimezoneCode::ASIA_KAMCHATKA,
            TimezoneCode::ASIA_KHANDYGA,
            TimezoneCode::ASIA_KRASNOYARSK,
            TimezoneCode::ASIA_MAGADAN,
            TimezoneCode::ASIA_NOVOKUZNETSK,
            TimezoneCode::ASIA_NOVOSIBIRSK,
            TimezoneCode::ASIA_OMSK,
            TimezoneCode::ASIA_SAKHALIN,
            TimezoneCode::ASIA_SREDNEKOLYMSK,
            TimezoneCode::ASIA_TOMSK,
            TimezoneCode::ASIA_UST_NERA,
            TimezoneCode::ASIA_VLADIVOSTOK,
            TimezoneCode::ASIA_YAKUTSK,
            TimezoneCode::ASIA_YEKATERINBURG,
            TimezoneCode::EUROPE_ASTRAKHAN,
            TimezoneCode::EUROPE_KALININGRAD,
            TimezoneCode::EUROPE_KIROV,
            TimezoneCode::EUROPE_MOSCOW,
            TimezoneCode::EUROPE_SAMARA,
            TimezoneCode::EUROPE_SARATOV,
            TimezoneCode::EUROPE_SIMFEROPOL,
            TimezoneCode::EUROPE_ULYANOVSK,
            TimezoneCode::EUROPE_VOLGOGRAD,
        ]));
        $this->setLanguages(new Collection([LanguageCode::RUSSIAN,]));
    }
}
