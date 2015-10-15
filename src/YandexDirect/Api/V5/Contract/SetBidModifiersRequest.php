<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidModifiersRequest
{

    protected $BidModifiers = array(
        
    );

    /**
     * Creates a new instance of SetBidModifiersRequest.
     *
     * @return SetBidModifiersRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BidModifiers.
     *
     * @return BidModifierSetItem[]
     */
    public function getBidModifiers()
    {
        return $this->BidModifiers;
    }

    /**
     * Sets BidModifiers.
     *
     * @param BidModifierSetItem[] $value
     * @return $this
     */
    public function setBidModifiers(array $value)
    {
        $this->BidModifiers = $value;

        return $this;
    }


}

