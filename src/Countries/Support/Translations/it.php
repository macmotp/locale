<?php

namespace Macmotp\Countries\Support\Translations;

use Macmotp\Continent;
use Macmotp\Country;

/**
 * Italian
 */
class it implements Translation
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
            Continent::ANTARCTIC => 'Antartide',
            Continent::ARCTIC => 'Artico',
            Continent::ASIA => 'Asia',
            Continent::EUROPE => 'Europa',
            Continent::NORTH_AMERICA => 'America del Nord',
            Continent::OCEANIA => 'Oceania',
            Continent::SOUTH_AMERICA => 'America del Sud',

            Country::ANDORRA => 'Andorra',

            Country::UNITED_STATES_OF_AMERICA => 'Stati Uniti d\'America',

            default => 'Italian',
        };
    }
}


