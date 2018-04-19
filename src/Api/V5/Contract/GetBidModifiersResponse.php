<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidModifiersResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $BidModifiers = null;

    /**
     * Creates a new instance of GetBidModifiersResponse.
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
     * @return BidModifierGetItem[]|null
     */
    public function getBidModifiers()
    {
        return isset($this->BidModifiers) ? $this->BidModifiers : null;
    }

    /**
     * Sets BidModifiers.
     *
     * @param BidModifierGetItem[]|null $value
     * @return self
     */
    public function setBidModifiers(array $value = null)
    {
        $this->BidModifiers = $value;

        return $this;
    }


}

