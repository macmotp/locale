<?php

namespace Macmotp\Countries\Support;

use Illuminate\Support\Collection as BaseCollection;
use Macmotp\Continents\Exceptions\InvalidContinentCodeException;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Currencies\Exceptions\InvalidCurrencyCodeException;
use Macmotp\Currencies\Support\CurrencyCode;
use Macmotp\Currency;
use Macmotp\Language;
use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use Macmotp\Languages\Support\LanguageCode;
use ValueError;

/**
 * Collection class
 */
final class Collection extends BaseCollection
{
    /**
     * Filter by Currency
     *
     * @param CurrencyCode|string $currencyCode
     * @return $this
     * @throws InvalidCurrencyCodeException
     */
    public function usingCurrency(CurrencyCode|string $currencyCode): self
    {
        if (is_string($currencyCode)) {
            try {
                $currencyCode = CurrencyCode::from(strtoupper($currencyCode));
            } catch (ValueError $e) {
                return throw new InvalidCurrencyCodeException($e->getMessage());
            }
        }

        return $this->filter(function (CountryInterface $country) use ($currencyCode) {
            return $country->getCurrencies()->filter(function (Currency $currency) use ($currencyCode) {
                return $currency->getCode() === $currencyCode->value;
            })->isNotEmpty();
        });
    }

    /**
     * Filter by Continent
     *
     * @param ContinentCode|string $continentCode
     * @return $this
     * @throws InvalidContinentCodeException
     */
    public function ofContinent(ContinentCode|string $continentCode): self
    {
        if (is_string($continentCode)) {
            try {
                $continentCode = ContinentCode::from(strtoupper($continentCode));
            } catch (ValueError $e) {
                return throw new InvalidContinentCodeException($e->getMessage());
            }
        }

        return $this->filter(fn (CountryInterface $country) => $country->getContinent()->getCode() === $continentCode);
    }

    /**
     * Filter by Language
     *
     * @param LanguageCode|string $languageCode
     * @return $this
     * @throws InvalidLanguageCodeException
     */
    public function usingLanguage(LanguageCode|string $languageCode): self
    {
        if (is_string($languageCode)) {
            try {
                $languageCode = LanguageCode::from(strtoupper($languageCode));
            } catch (ValueError $e) {
                return throw new InvalidLanguageCodeException($e->getMessage());
            }
        }

        return $this->filter(function (CountryInterface $country) use ($languageCode) {
            return $country->getLanguages()->filter(function (Language $language) use ($languageCode) {
                return $language->getCode() === $languageCode->value;
            })->isNotEmpty();
        });
    }
}
