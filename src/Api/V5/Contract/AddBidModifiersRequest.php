<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddBidModifiersRequest
{

    protected $BidModifiers = [];

    /**
     * Creates a new instance of AddBidModifiersRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BidModifiers.
     *
     * @return BidModifierAddItem[]
     */
    public function getBidModifiers()
    {
        return $this->BidModifiers;
    }

    /**
     * Sets BidModifiers.
     *
     * @param BidModifierAddItem[] $value
     * @return $this
     */
    public function setBidModifiers(array $value)
    {
        $this->BidModifiers = $value;

        return $this;
    }


}

