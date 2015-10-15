<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidModifiersResponse extends GetResponseGeneral
{

    protected $BidModifiers = null;

    /**
     * Creates a new instance of GetBidModifiersResponse.
     *
     * @return GetBidModifiersResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BidModifiers.
     *
     * @return BidModifierGetItem[]|null
     */
    public function getBidModifiers()
    {
        return $this->BidModifiers;
    }

    /**
     * Sets BidModifiers.
     *
     * @param BidModifierGetItem[]|null $value
     * @return $this
     */
    public function setBidModifiers(array $value = null)
    {
        $this->BidModifiers = $value;

        return $this;
    }


}

