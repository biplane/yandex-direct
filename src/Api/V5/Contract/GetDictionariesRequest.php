<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDictionariesRequest
{
    protected $DictionaryNames = [];

    /**
     * Creates a new instance of GetDictionariesRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets DictionaryNames.
     *
     * @see DictionaryNameEnum
     *
     * @return string[]
     */
    public function getDictionaryNames(): array
    {
        return $this->DictionaryNames;
    }

    /**
     * Sets DictionaryNames.
     *
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
