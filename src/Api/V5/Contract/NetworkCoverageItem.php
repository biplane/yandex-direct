<?php

declare(strict_types=1);

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
     * Gets Bid.
     */
    public function getBid(): int
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @return $this
     */
    public function setBid(int $value)
    {
        $this->Bid = $value;

        return $this;
    }
}
