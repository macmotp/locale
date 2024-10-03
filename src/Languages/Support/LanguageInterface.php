<?php

namespace Macmotp\Languages\Support;

/**
 * LanguageInterface interface
 */
interface LanguageInterface
{
    /**
     * Get Name
     *
     * @return LanguageName
     */
    public function getName(): LanguageName;

    /**
     * Get Code
     *
     * @return LanguageCode
     */
    public function getCode(): LanguageCode;

    /**
     * Convert the language into array
     *
     * @return array
     */
    public function toArray(): array;
}
