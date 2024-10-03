<?php

namespace Macmotp\Languages\Support;

use Macmotp\Languages\Exceptions\InvalidLanguageCodeException;
use ValueError;

/**
 * LanguageFactory class
 *
 * Mapping each continent code with related implementation
 */
final class LanguageFactory
{
    /**
     * Map language codes with related interface
     *
     * @param LanguageCode|string $code
     *
     * @return LanguageInterface
     * @throws InvalidLanguageCodeException
     */
    public static function create(LanguageCode|string $code): LanguageInterface
    {
        if (is_string($code)) {
            try {
                $code = LanguageCode::from(strtoupper($code));
            } catch (ValueError $e) {
                return throw new InvalidLanguageCodeException($e->getMessage());
            }
        }

        return new LanguageImplementation(
            code: $code,
            name: LanguageName::fromName($code->name),
        );
    }
}
