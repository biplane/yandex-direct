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
    protected $Timestamp = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTimestamp(): string
    {
        return $this->Timestamp;
    }

    /**
     * @return $this
     */
    public function setTimestamp(string $value)
    {
        $this->Timestamp = $value;

        return $this;
    }
}
