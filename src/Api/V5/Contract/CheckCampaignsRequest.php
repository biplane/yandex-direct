<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CheckCampaignsRequest
{
    protected $Timestamp = null;

    /**
     * Creates a new instance of CheckCampaignsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Timestamp.
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Sets Timestamp.
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
