<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CoverageInfo
{
    /**
     * @var float
     */
    protected $Probability;
    /**
     * @var float
     */
    protected $Price;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Probability.
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->Probability;
    }

    /**
     * Sets the Probability.
     *
     * @param float $Probability
     *
     * @return CoverageInfo
     */
    public function setProbability($Probability)
    {
        $this->Probability = $Probability;

        return $this;
    }

    /**
     * Gets the Price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * Sets the Price.
     *
     * @param float $Price
     *
     * @return CoverageInfo
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }
}