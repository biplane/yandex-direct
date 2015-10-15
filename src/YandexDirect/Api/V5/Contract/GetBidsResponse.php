<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidsResponse
{

    protected $Bids = null;

    /**
     * Creates a new instance of GetBidsResponse.
     *
     * @return GetBidsResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return BidGetItem[]|null
     */
    public function getBids()
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param BidGetItem[]|null $value
     * @return $this
     */
    public function setBids(array $value = null)
    {
        $this->Bids = $value;

        return $this;
    }


}

