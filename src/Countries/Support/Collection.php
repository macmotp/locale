<?php

namespace Macmotp\Countries\Support;

use Illuminate\Support\Collection as BaseCollection;

/**
 * Collection class
 */
final class Collection extends BaseCollection
{
    /**
     * Filter by Currency
     *
     * @param string $currencyCode
     * @return $this
     */
    public function withCurrency(string $currencyCode): self
    {
        return $this->filter(fn(CountryInterface $country) => $country->getCurrencies()->contains($currencyCode));
    }

    /**
     * Filter by Continent
     *
     * @param string $continent
     * @return $this
     */
    public function ofContinent(string $continent): self
    {
        return $this->filter(fn(CountryInterface $country) => $country->getContinent() === $continent);
    }

    /**
     * Filter by Language
     *
     * @param string $language
     * @return $this
     */
    public function speaking(string $language): self
    {
        return $this->filter(fn(CountryInterface $country) => $country->getLanguages()->contains($language));
    }
}
