<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsSmartAdTargetsRequest
{
    protected $Bids = [];

    /**
     * Creates a new instance of SetBidsSmartAdTargetsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return SmartAdTargetSetBidsItem[]
     */
    public function getBids(): array
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
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
