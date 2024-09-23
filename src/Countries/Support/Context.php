<?php

namespace Macmotp\Countries\Support;

use Macmotp\Country;
use Macmotp\Countries\IT;
use Macmotp\Countries\US;

/**
 * Context class
 *
 * Mapping each country code with related implementation
 */
final class Context
{
    /**
     * Map country codes with related interface
     *
     * @param string $countryCode
     *
     * @return CountryInterface
     */
    public static function getFromCode(string $countryCode): CountryInterface
    {
        return match ($countryCode) {
            Country::IT => new IT(),
            default => new US(),
        };
    }

    /**
     * Return a Collection with all the currencies
     *
     * @return Collection
     */
    public static function getAll(): Collection
    {
        return new Collection([
            new US(),
        ]);
    }
}
