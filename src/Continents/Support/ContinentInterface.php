<?php

namespace Macmotp\Continents\Support;

/**
 * ContinentInterface interface
 */
interface ContinentInterface
{
    /**
     * Get Name
     *
     * @return ContinentName
     */
    public function getName(): ContinentName;

    /**
     * Get Code
     *
     * @return ContinentCode
     */
    public function getCode(): ContinentCode;

    /**
     * Set Name
     *
     * @param ContinentName $name
     * @return ContinentInterface
     */
    public function setName(ContinentName $name): ContinentInterface;

    /**
     * Set Code
     *
     * @param ContinentCode $code
     * @return ContinentInterface
     */
    public function setCode(ContinentCode $code): ContinentInterface;

    /**
     * Convert the continent into array
     *
     * @return array
     */
    public function toArray(): array;
}
