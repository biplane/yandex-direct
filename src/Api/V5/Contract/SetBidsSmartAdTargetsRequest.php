<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsSmartAdTargetsRequest
{

    protected $Bids = [];

    /**
     * Creates a new instance of SetBidsSmartAdTargetsRequest.
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
     * @return SmartAdTargetSetBidsItem[]
     */
    public function getBids()
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param SmartAdTargetSetBidsItem[] $value
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }


}

