<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyNetworkDefaultAdd
{

    protected $LimitPercent = null;

    protected $BidPercent = null;

    /**
     * Creates a new instance of StrategyNetworkDefaultAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets LimitPercent.
     *
     * @return int|null
     */
    public function getLimitPercent()
    {
        return $this->LimitPercent;
    }

    /**
     * Sets LimitPercent.
     *
     * @param int|null $value
     * @return self
     */
    public function setLimitPercent($value = null)
    {
        $this->LimitPercent = $value;

        return $this;
    }

    /**
     * Gets BidPercent.
     *
     * @return int|null
     */
    public function getBidPercent()
    {
        return $this->BidPercent;
    }

    /**
     * Sets BidPercent.
     *
     * @param int|null $value
     * @return self
     */
    public function setBidPercent($value = null)
    {
        $this->BidPercent = $value;

        return $this;
    }


}

