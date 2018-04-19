<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $Bids = null;

    /**
     * Creates a new instance of GetBidsResponse.
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
     * @return BidGetItem[]|null
     */
    public function getBids()
    {
        return isset($this->Bids) ? $this->Bids : null;
    }

    /**
     * Sets Bids.
     *
     * @param BidGetItem[]|null $value
     * @return self
     */
    public function setBids(array $value = null)
    {
        $this->Bids = $value;

        return $this;
    }


}

