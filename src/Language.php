<?php

declare(strict_types=1);

namespace Macmotp;

use Illuminate\Support\Collection;
use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use Macmotp\Languages\Support\LanguageCode;
use Macmotp\Languages\Support\LanguageFactory;
use Macmotp\Languages\Support\LanguageInterface;

class Language
{
    private LanguageInterface $language;

    /**
     * @param LanguageCode|string $code
     * @throws InvalidLanguageCodeException
     */
    public function __construct(private readonly LanguageCode|string $code)
    {
        $this->language = LanguageFactory::create($code);
    }

    /**
     * @param LanguageCode|string $code
     * @return Language
     * @throws InvalidLanguageCodeException
     */
    public static function make(LanguageCode|string $code): self
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
        return $this->language->getCode()->value;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->language->getName()->value;
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
     * Get all Languages
     *
     * @return Collection
     * @throws InvalidLanguageCodeException
     */
    public static function all(): Collection
    {
        $collection = new Collection();

        foreach (LanguageCode::cases() as $code) {
            $collection->push(LanguageFactory::create($code));
        }

        return $collection;
    }
}
