<?php

declare(strict_types=1);

namespace Macmotp;

use Macmotp\Continents\Exceptions\InvalidContinentCodeException;
use Macmotp\Continents\Support\ContinentCode;
use Macmotp\Continents\Support\ContinentFactory;
use Macmotp\Continents\Support\ContinentInterface;
use Macmotp\Countries\Support\Collection;
use Macmotp\Locales\Exceptions\InvalidLocaleCodeException;
use Macmotp\Locales\Support\LocaleCode;
use Macmotp\Locales\Support\LocaleFactory;
use Macmotp\Locales\Support\LocaleInterface;

class Continent
{
    private ContinentInterface $continent;
    private LocaleInterface $locale;

    /**
     * Example: $continent = new Continent(ContinentCode::EUR);
     *
     * @param ContinentCode|string $code
     * @throws InvalidContinentCodeException
     * @throws InvalidLocaleCodeException
     */
    public function __construct(private readonly ContinentCode|string $code)
    {
        $this->continent = ContinentFactory::create($code);
        $this->locale = LocaleFactory::create(LocaleCode::ENGLISH);
    }

    /**
     * Usage: Continent::make(ContinentCode::EUR);
     *
     * @param ContinentCode|string $code
     *
     * @return Continent
     * @throws InvalidContinentCodeException
     * @throws InvalidLocaleCodeException
     */
    public static function make(ContinentCode|string $code): self
    {
        return new self($code);
    }

    /**
     * Set Locale
     *
     * @param LocaleCode|string $localeCode
     * @return $this
     * @throws InvalidLocaleCodeException
     */
    public function setLocale(LocaleCode|string $localeCode): self
    {
        $this->locale = LocaleFactory::create($localeCode);

        return $this;
    }

    /**
     * Get Code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->continent->getCode()->value;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->locale->translateContinent($this->continent->getName());
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
     * Get all Continents
     *
     * @return Collection
     * @throws InvalidContinentCodeException
     */
    public static function all(): Collection
    {
        $collection = new Collection();

        foreach (ContinentCode::cases() as $code) {
            $collection->push(ContinentFactory::create($code));
        }

        return $collection;
    }
}
