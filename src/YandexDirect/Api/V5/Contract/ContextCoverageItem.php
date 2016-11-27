<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ContextCoverageItem
{

    protected $Probability = null;

    protected $Price = null;

    /**
     * Creates a new instance of ContextCoverageItem.
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
     * Gets Price.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @param int $value
     * @return self
     */
    public function setPrice($value)
    {
        $this->Price = $value;

        return $this;
    }


}

