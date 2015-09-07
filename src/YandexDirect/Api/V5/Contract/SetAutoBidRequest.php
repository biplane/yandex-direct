<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetAutoBidRequest
{

    protected $Bids = array(
        
    );

    /**
     * Creates a new instance of SetAutoBidRequest.
     *
     * @return SetAutoBidRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return BidSetAutoItem[]
     */
    public function getBids()
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param BidSetAutoItem[] $value
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }


}

