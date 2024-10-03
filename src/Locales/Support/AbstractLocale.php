<?php

namespace Macmotp\Locales\Support;

use Illuminate\Contracts\Support\Arrayable;

/**
 * AbstractLocale abstract class
 */
abstract class AbstractLocale implements Arrayable, LocaleInterface
{
    private LocaleName $name;
    private LocaleCode $code;
    private LocaleEnglishName $englishName;
    private LocaleFlag $flag;

    /**
     * Convert the continent into array
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'code' => $this->getCode()->value,
            'english_name' => $this->getEnglishName()->value,
            'flag' => $this->getFlag()->value,
            'name' => $this->getName()->value,
        ];
    }

    /**
     * Get Name
     *
     * @return LocaleName
     */
    public function getName(): LocaleName
    {
        return $this->name;
    }

    /**
     * Get Code
     *
     * @return LocaleCode
     */
    public function getCode(): LocaleCode
    {
        return $this->code;
    }

    /**
     * Get English Name
     *
     * @return LocaleEnglishName
     */
    public function getEnglishName(): LocaleEnglishName
    {
        return $this->englishName;
    }

    /**
     * Get Flag
     *
     * @return LocaleFlag
     */
    public function getFlag(): LocaleFlag
    {
        return $this->flag;
    }

    /**
     * Set Name
     *
     * @param LocaleName $name
     *
     * @return LocaleInterface
     */
    public function setName(LocaleName $name): LocaleInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set Code
     *
     * @param LocaleCode $code
     *
     * @return LocaleInterface
     */
    public function setCode(LocaleCode $code): LocaleInterface
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Set English Name
     *
     * @param LocaleEnglishName $englishName
     * @return LocaleInterface
     */
    public function setEnglishName(LocaleEnglishName $englishName): LocaleInterface
    {
        $this->englishName = $englishName;

        return $this;
    }

    /**
     * Set Flag
     *
     * @param LocaleFlag $flag
     * @return LocaleInterface
     */
    public function setFlag(LocaleFlag $flag): LocaleInterface
    {
        $this->flag = $flag;

        return $this;
    }
}
