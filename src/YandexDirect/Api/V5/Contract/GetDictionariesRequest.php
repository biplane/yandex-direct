<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDictionariesRequest
{

    protected $DictionaryNames = array(
        
    );

    /**
     * Creates a new instance of GetDictionariesRequest.
     *
     * @return GetDictionariesRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets DictionaryNames.
     *
     * @return DictionaryNameEnum[]
     */
    public function getDictionaryNames()
    {
        return $this->DictionaryNames;
    }

    /**
     * Sets DictionaryNames.
     *
     * @param DictionaryNameEnum[] $value
     * @return $this
     */
    public function setDictionaryNames(array $value)
    {
        $this->DictionaryNames = $value;

        return $this;
    }


}

