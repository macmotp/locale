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
 * Liberia
 */
final class LR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::AFRICA);
        $this->setName(CountryName::LIBERIA);
        $this->setCapital(CountryCapital::MONROVIA);
        $this->setCode(CountryCode::LR);
        $this->setAlpha3Code('LBR');
        $this->setDialCode('+231');
        $this->setTld('.lr');
        $this->setDateFormat('d-m-Y');
        $this->setFlag(CountryFlag::LR);
        $this->setDefaultCurrency(CurrencyCode::LRD);
        $this->setDefaultTimezone(TimezoneCode::AFRICA_MONROVIA);
        $this->setDefaultLanguage(LanguageCode::ENGLISH);
        $this->setCurrencies(new Collection([CurrencyCode::LRD,]));
        $this->setTimezones(new Collection([TimezoneCode::AFRICA_MONROVIA,]));
        $this->setLanguages(new Collection([LanguageCode::ENGLISH,]));
    }
}
