<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsAudienceTargetsRequest
{

    protected $Bids = [];

    /**
     * Creates a new instance of SetBidsAudienceTargetsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return AudienceTargetSetBidsItem[]
     */
    public function getBids()
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param AudienceTargetSetBidsItem[] $value
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }


}

