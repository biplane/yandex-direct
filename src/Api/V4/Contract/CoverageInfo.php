<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CoverageInfo
{

    protected $Probability = null;

    protected $Price = null;

    /**
     * Creates a new instance of CoverageInfo.
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
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @param float $value
     * @return self
     */
    public function setPrice($value)
    {
        $this->Price = $value;

        return $this;
    }


}

