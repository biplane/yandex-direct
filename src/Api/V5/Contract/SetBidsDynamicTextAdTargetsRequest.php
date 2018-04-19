<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsDynamicTextAdTargetsRequest
{

    protected $Bids = null;

    /**
     * Creates a new instance of SetBidsDynamicTextAdTargetsRequest.
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
     * @return SetBidsItem[]|null
     */
    public function getBids()
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param SetBidsItem[]|null $value
     * @return $this
     */
    public function setBids(array $value = null)
    {
        $this->Bids = $value;

        return $this;
    }


}

