<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SerpLayoutAdjustmentAdd
{

    protected $SerpLayout = null;

    protected $BidModifier = null;

    /**
     * Creates a new instance of SerpLayoutAdjustmentAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SerpLayout.
     *
     * @return string
     * @see SerpLayoutEnum
     */
    public function getSerpLayout()
    {
        return $this->SerpLayout;
    }

    /**
     * Sets SerpLayout.
     *
     * @param string $value
     * @return $this
     * @see SerpLayoutEnum
     */
    public function setSerpLayout($value)
    {
        $this->SerpLayout = $value;

        return $this;
    }

    /**
     * Gets BidModifier.
     *
     * @return int
     */
    public function getBidModifier()
    {
        return $this->BidModifier;
    }

    /**
     * Sets BidModifier.
     *
     * @param int $value
     * @return $this
     */
    public function setBidModifier($value)
    {
        $this->BidModifier = $value;

        return $this;
    }


}

