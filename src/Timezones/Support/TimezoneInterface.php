<?php

namespace Macmotp\Timezones\Support;

/**
 * TimezoneInterface interface
 */
interface TimezoneInterface
{
    /**
     * Get Code
     *
     * @return TimezoneCode
     */
    public function getCode(): TimezoneCode;

    /**
     * Get Name
     *
     * @return TimezoneCode
     */
    public function getName(): TimezoneCode;

    /**
     * Convert to timezone into array
     *
     * @return array
     */
    public function toArray(): array;
}
