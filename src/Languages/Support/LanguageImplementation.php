<?php

namespace Macmotp\Languages\Support;

use Illuminate\Contracts\Support\Arrayable;

/**
 * LanguageImplementation abstract class
 */
readonly class LanguageImplementation implements Arrayable, LanguageInterface
{
    public function __construct(
        private LanguageCode $code,
        private LanguageName $name,
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
     * @return LanguageCode
     */
    public function getCode(): LanguageCode
    {
        return $this->code;
    }

    /**
     * Get Name
     *
     * @return LanguageName
     */
    public function getName(): LanguageName
    {
        return $this->name;
    }
}
