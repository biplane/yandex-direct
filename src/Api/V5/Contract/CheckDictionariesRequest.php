<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckDictionariesRequest
{

    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckDictionariesRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Timestamp.
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @param string|null $value
     * @return self
     */
    public function setTimestamp($value = null)
    {
        $this->Timestamp = $value;

        return $this;
    }


}

