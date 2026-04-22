<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class NetworkCoverageItem
{
    /** @var float */
    protected $Probability;

    /** @var int */
    protected $Bid;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Probability
     */
    public function getProbability(): float
    {
        return $this->Probability;
    }

    /**
     * Set Probability
     *
     * @return $this
     */
    public function setProbability(float $value)
    {
        $this->Probability = $value;

        return $this;
    }

    /**
     * Get Bid
     */
    public function getBid(): int
    {
        return $this->Bid;
    }

    /**
     * Set Bid
     *
     * @return $this
     */
    public function setBid(int $value)
    {
        $this->Bid = $value;

        return $this;
    }
}
