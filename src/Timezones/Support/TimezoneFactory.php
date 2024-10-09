<?php

namespace Macmotp\Timezones\Support;

use Macmotp\Timezones\Exceptions\InvalidTimezoneCodeException;
use ValueError;

/**
 * TimezoneFactory class
 *
 * Mapping each continent code with related implementation
 */
final class TimezoneFactory
{
    /**
     * Map timezone codes with related interface
     *
     * @param TimezoneCode|string $code
     *
     * @return TimezoneInterface
     * @throws InvalidTimezoneCodeException
     */
    public static function create(TimezoneCode|string $code): TimezoneInterface
    {
        if (is_string($code)) {
            try {
                $code = TimezoneCode::from($code);
            } catch (ValueError $e) {
                return throw new InvalidTimezoneCodeException($e->getMessage());
            }
        }

        return new TimezoneImplementation(
            code: $code,
            name: $code,
        );
    }
}
