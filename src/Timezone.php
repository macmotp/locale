<?php

declare(strict_types=1);

namespace Macmotp;

use Illuminate\Support\Collection;
use Macmotp\Timezones\Exceptions\InvalidTimezoneCodeException;
use Macmotp\Timezones\Support\TimezoneCode;
use Macmotp\Timezones\Support\TimezoneFactory;
use Macmotp\Timezones\Support\TimezoneInterface;

class Timezone
{
    private TimezoneInterface $timezone;

    /**
     * @param TimezoneCode|string $code
     * @throws InvalidTimezoneCodeException
     */
    public function __construct(private readonly TimezoneCode|string $code)
    {
        $this->timezone = TimezoneFactory::create($this->code);
    }

    /**
     * @param TimezoneCode|string $code
     * @return Timezone
     * @throws InvalidTimezoneCodeException
     */
    public static function make(TimezoneCode|string $code): self
    {
        return new self($code);
    }

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->timezone->getCode()->value;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->timezone->getName()->value;
    }

    /**
     * Convert to Array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'code' => $this->getCode(),
            'name' => $this->getName(),
        ];
    }

    /**
     * Get all Timezones
     *
     * @return Collection
     * @throws InvalidTimezoneCodeException
     */
    public static function all(): Collection
    {
        $collection = new Collection();

        foreach (TimezoneCode::cases() as $code) {
            $collection->push(TimezoneFactory::create($code));
        }

        return $collection;
    }
}
