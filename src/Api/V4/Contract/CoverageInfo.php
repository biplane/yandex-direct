<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Probability.
     */
    public function getProbability(): float
    {
        return $this->Probability;
    }

    /**
     * Sets Probability.
     *
     * @return $this
     */
    public function setProbability(float $value)
    {
        $this->Probability = $value;

        return $this;
    }

    /**
     * Gets Price.
     */
    public function getPrice(): float
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @return $this
     */
    public function setPrice(float $value)
    {
        $this->Price = $value;

        return $this;
    }
}
