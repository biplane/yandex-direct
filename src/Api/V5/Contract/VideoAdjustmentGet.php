<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VideoAdjustmentGet
{

    protected $BidModifier = null;

    /**
     * Creates a new instance of VideoAdjustmentGet.
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
        return $this->BidModifier;
    }

    /**
     * Sets BidModifier.
     *
     * @param int|null $value
     * @return self
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }


}

