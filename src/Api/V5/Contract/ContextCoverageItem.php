<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ContextCoverageItem
{
    /** @var float */
    protected $Probability;

    /** @var int */
    protected $Price;

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
     * Get Price
     */
    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * Set Price
     *
     * @return $this
     */
    public function setPrice(int $value)
    {
        $this->Price = $value;

        return $this;
    }
}
