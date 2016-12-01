<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetAutoBidsRequest
{

    protected $Bids = [];

    /**
     * Creates a new instance of SetAutoBidsRequest.
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
     * @return self
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }


}

