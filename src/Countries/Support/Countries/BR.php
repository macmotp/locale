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
 * Brazil
 */
final class BR extends AbstractCountry implements CountryInterface
{
    /**
     * @throws InvalidTimezoneCodeException
     * @throws InvalidLanguageCodeException
     * @throws InvalidCurrencyCodeException
     */
    public function __construct()
    {
        $this->setContinent(ContinentCode::SOUTH_AMERICA);
        $this->setName(CountryName::BRAZIL);
        $this->setCapital(CountryCapital::BRASILIA);
        $this->setCode(CountryCode::BR);
        $this->setAlpha3Code('BRA');
        $this->setDialCode('+55');
        $this->setTld('.br');
        $this->setDateFormat('d/m/Y');
        $this->setFlag(CountryFlag::BR);
        $this->setDefaultCurrency(CurrencyCode::BRL);
        $this->setDefaultTimezone(TimezoneCode::AMERICA_SAO_PAULO);
        $this->setDefaultLanguage(LanguageCode::PORTUGUESE);
        $this->setCurrencies(new Collection([CurrencyCode::BRL,]));
        $this->setTimezones(new Collection([
            TimezoneCode::AMERICA_ARAGUAINA,
            TimezoneCode::AMERICA_BAHIA,
            TimezoneCode::AMERICA_BELEM,
            TimezoneCode::AMERICA_BOA_VISTA,
            TimezoneCode::AMERICA_CAMPO_GRANDE,
            TimezoneCode::AMERICA_CUIABA,
            TimezoneCode::AMERICA_EIRUNEPE,
            TimezoneCode::AMERICA_FORTALEZA,
            TimezoneCode::AMERICA_MACEIO,
            TimezoneCode::AMERICA_MANAUS,
            TimezoneCode::AMERICA_NORONHA,
            TimezoneCode::AMERICA_PORTO_VELHO,
            TimezoneCode::AMERICA_RECIFE,
            TimezoneCode::AMERICA_RIO_BRANCO,
            TimezoneCode::AMERICA_SANTAREM,
            TimezoneCode::AMERICA_SAO_PAULO,
        ]));
        $this->setLanguages(new Collection([LanguageCode::PORTUGUESE,]));
    }
}
