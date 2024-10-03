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
 * North Macedonia
 */
final class MK extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::EUROPE);
        $this->setName(CountryName::NORTH_MACEDONIA);
        $this->setCapital(CountryCapital::SKOPJE);
        $this->setCode(CountryCode::MK);
        $this->setAlpha3Code('MKD');
        $this->setDialCode('+389');
        $this->setTld('.mk');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::MK);
        $this->setDefaultCurrency(CurrencyCode::MKD);
        $this->setDefaultTimezone(TimezoneCode::EUROPE_SKOPJE);
        $this->setDefaultLanguage(LanguageCode::MACEDONIAN);
        $this->setCurrencies(new Collection([CurrencyCode::MKD,]));
        $this->setTimezones(new Collection([TimezoneCode::EUROPE_SKOPJE,]));
        $this->setLanguages(new Collection([LanguageCode::ALBANIAN, LanguageCode::MACEDONIAN,]));
    }
}
