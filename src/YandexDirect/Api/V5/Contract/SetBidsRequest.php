<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsRequest
{

    protected $Bids = null;

    /**
     * Creates a new instance of SetBidsRequest.
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
     * @return BidSetItem[]|null
     */
    public function getBids()
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param BidSetItem[]|null $value
     * @return self
     */
    public function setBids(array $value = null)
    {
        $this->Bids = $value;

        return $this;
    }


}

