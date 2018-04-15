<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NetworkCoverageItem
{

    protected $Probability = null;

    protected $Bid = null;

    /**
     * Creates a new instance of NetworkCoverageItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Probability.
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->Probability;
    }

    /**
     * Sets Probability.
     *
     * @param float $value
     * @return self
     */
    public function setProbability($value)
    {
        $this->Probability = $value;

        return $this;
    }

    /**
     * Gets Bid.
     *
     * @return int
     */
    public function getBid()
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @param int $value
     * @return self
     */
    public function setBid($value)
    {
        $this->Bid = $value;

        return $this;
    }


}

