<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsAudienceTargetsRequest
{
    protected $Bids = [];

    /**
     * Creates a new instance of SetBidsAudienceTargetsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return AudienceTargetSetBidsItem[]
     */
    public function getBids(): array
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param AudienceTargetSetBidsItem[] $value
     *
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }
}
