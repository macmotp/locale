<?php

namespace Macmotp\Countries\Support\Translations;

use Macmotp\Continent;
use Macmotp\Country;

/**
 * English
 */
class en implements Translation
{
    /**
     * Get translation
     *
     * @param string $key
     * @return string
     */
    public function get(string $key): string
    {
        return match($key) {
            Continent::AFRICA => 'Africa',
            Continent::ANTARCTIC => 'Antarctic',
            Continent::ARCTIC => 'Arctic',
            Continent::ASIA => 'Asia',
            Continent::EUROPE => 'Europe',
            Continent::NORTH_AMERICA => 'North America',
            Continent::OCEANIA => 'Oceania',
            Continent::SOUTH_AMERICA => 'South America',

            Country::ANDORRA => 'Andorra',

            Country::UNITED_STATES_OF_AMERICA => 'United States of America',

            default => 'English',
        };
    }
}
