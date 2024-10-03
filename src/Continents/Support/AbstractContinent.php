<?php

namespace Macmotp\Continents\Support;

use Illuminate\Contracts\Support\Arrayable;

/**
 * AbstractContinent abstract class
 */
abstract class AbstractContinent implements Arrayable, ContinentInterface
{
    private ContinentName $name;
    private ContinentCode $code;

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
     * Get Name
     *
     * @return ContinentName
     */
    public function getName(): ContinentName
    {
        return $this->name;
    }

    /**
     * Get Code
     *
     * @return ContinentCode
     */
    public function getCode(): ContinentCode
    {
        return $this->code;
    }

    /**
     * Set Name
     *
     * @param ContinentName $name
     *
     * @return ContinentInterface
     */
    public function setName(ContinentName $name): ContinentInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set Code
     *
     * @param ContinentCode $code
     *
     * @return ContinentInterface
     */
    public function setCode(ContinentCode $code): ContinentInterface
    {
        $this->code = $code;

        return $this;
    }
}
