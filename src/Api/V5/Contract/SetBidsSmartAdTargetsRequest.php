<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SetBidsSmartAdTargetsRequest
{
    protected $Bids = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return SmartAdTargetSetBidsItem[]
     */
    public function getBids(): array
    {
        return $this->Bids;
    }

    /**
     * @param SmartAdTargetSetBidsItem[] $value
     *
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }
}
