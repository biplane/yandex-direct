<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetDictionariesRequest
{
    protected $DictionaryNames = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see DictionaryNameEnum
     *
     * @return string[]
     */
    public function getDictionaryNames(): array
    {
        return $this->DictionaryNames;
    }

    /**
     * @see DictionaryNameEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setDictionaryNames(array $value)
    {
        $this->DictionaryNames = $value;

        return $this;
    }
}
