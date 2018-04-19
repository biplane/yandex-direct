<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyNetworkDefaultAdd
{

//    Can be omit.
//    protected $LimitPercent = null;

//    Can be omit.
//    protected $BidPercent = null;

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
        return isset($this->LimitPercent) ? $this->LimitPercent : null;
    }

    /**
     * Sets LimitPercent.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->BidPercent) ? $this->BidPercent : null;
    }

    /**
     * Sets BidPercent.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidPercent($value = null)
    {
        $this->BidPercent = $value;

        return $this;
    }


}

