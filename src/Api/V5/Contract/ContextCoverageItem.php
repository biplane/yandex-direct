<?php

declare(strict_types=1);

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
    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * Sets Price.
     *
     * @return $this
     */
    public function setPrice(int $value)
    {
        $this->Price = $value;

        return $this;
    }
}
