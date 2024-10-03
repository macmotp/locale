<?php

namespace Macmotp\Timezones\Support;

use Illuminate\Contracts\Support\Arrayable;

/**
 * TimezoneImplementation abstract class
 */
readonly class TimezoneImplementation implements Arrayable, TimezoneInterface
{
    public function __construct(
        private TimezoneCode $code,
        private TimezoneCode $name,
    ) {
        //
    }

    /**
     * Convert the continent into array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'code' => $this->getCode()->value,
            'name' => $this->getName()->value,
        ];
    }

    /**
     * Get Code
     *
     * @return TimezoneCode
     */
    public function getCode(): TimezoneCode
    {
        return $this->code;
    }

    /**
     * Get Name
     *
     * @return TimezoneCode
     */
    public function getName(): TimezoneCode
    {
        return $this->name;
    }
}
