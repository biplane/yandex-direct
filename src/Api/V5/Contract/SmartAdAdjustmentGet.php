<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdAdjustmentGet
{

//    Can be omit.
//    protected $BidModifier = null;

    /**
     * Creates a new instance of SmartAdAdjustmentGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BidModifier.
     *
     * @return int|null
     */
    public function getBidModifier()
    {
        return isset($this->BidModifier) ? $this->BidModifier : null;
    }

    /**
     * Sets BidModifier.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }


}

