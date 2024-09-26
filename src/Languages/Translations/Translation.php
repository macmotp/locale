<?php

namespace Macmotp\Languages\Translations;

/**
 * Translation interface
 */
interface Translation
{
    /**
     * Get translation
     *
     * @param string $key
     * @return string
     */
    public function get(string $key): string;
}
