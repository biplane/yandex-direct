<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckCampaignsRequest
{

    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckCampaignsRequest.
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
     * @return string
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @param string $value
     * @return self
     */
    public function setTimestamp($value)
    {
        $this->Timestamp = $value;

        return $this;
    }


}

