<?php

declare(strict_types=1);

namespace Macmotp;

use Illuminate\Support\Collection;
use Macmotp\Locales\Exceptions\InvalidLocaleCodeException;
use Macmotp\Locales\Support\LocaleCode;
use Macmotp\Locales\Support\LocaleFactory;
use Macmotp\Locales\Support\LocaleInterface;

class Locale
{
    private LocaleInterface $locale;

    /**
     * Example: $locale = new Locale(LocaleCode::ENGLISH);
     *
     * @param LocaleCode|string $code
     * @throws InvalidLocaleCodeException
     */
    public function __construct(private readonly LocaleCode|string $code)
    {
        $this->locale = LocaleFactory::create($code);
    }

    /**
     * Usage: Locale::make(LocaleCode::EUR);
     *
     * @param LocaleCode|string $code
     *
     * @return Locale
     * @throws InvalidLocaleCodeException
     */
    public static function make(LocaleCode|string $code): self
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
        return $this->locale->getCode()->value;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->locale->getName()->value;
    }

    /**
     * Get English Name
     *
     * @return string
     */
    public function getEnglishName(): string
    {
        return $this->locale->getEnglishName()->value;
    }

    /**
     * Get Flag
     *
     * @return string
     */
    public function getFlag(): string
    {
        return $this->locale->getFlag()->value;
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
            'flag' => $this->getFlag(),
            'english_name' => $this->getEnglishName(),
        ];
    }

    /**
     * Get all Locales
     *
     * @return Collection
     * @throws InvalidLocaleCodeException
     */
    public static function all(): Collection
    {
        $collection = new Collection();

        foreach (LocaleCode::cases() as $code) {
            $collection->push(LocaleFactory::create($code));
        }

        return $collection;
    }
}
