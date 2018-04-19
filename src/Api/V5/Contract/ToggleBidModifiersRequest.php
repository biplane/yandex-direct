<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ToggleBidModifiersRequest
{

    protected $BidModifierToggleItems = [];

    /**
     * Creates a new instance of ToggleBidModifiersRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BidModifierToggleItems.
     *
     * @return BidModifierToggleItem[]
     */
    public function getBidModifierToggleItems()
    {
        return $this->BidModifierToggleItems;
    }

    /**
     * Sets BidModifierToggleItems.
     *
     * @param BidModifierToggleItem[] $value
     * @return $this
     */
    public function setBidModifierToggleItems(array $value)
    {
        $this->BidModifierToggleItems = $value;

        return $this;
    }


}

