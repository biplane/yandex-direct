<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDictionariesRequest
{

    protected $DictionaryNames = [];

    /**
     * Creates a new instance of GetDictionariesRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets DictionaryNames.
     *
     * @return string[]
     * @see DictionaryNameEnum
     */
    public function getDictionaryNames()
    {
        return $this->DictionaryNames;
    }

    /**
     * Sets DictionaryNames.
     *
     * @param string[] $value
     * @return $this
     * @see DictionaryNameEnum
     */
    public function setDictionaryNames(array $value)
    {
        $this->DictionaryNames = $value;

        return $this;
    }


}

