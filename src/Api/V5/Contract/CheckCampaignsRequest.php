<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CheckCampaignsRequest
{
    /** @var string */
    protected $Timestamp;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Timestamp
     */
    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * Set Timestamp
     *
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
