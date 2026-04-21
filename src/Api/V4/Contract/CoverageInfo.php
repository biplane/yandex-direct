<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CoverageInfo
{
    /** @var float */
    protected $Probability;

    /** @var float */
    protected $Price;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
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
    public function getPrice(): float
    {
        return $this->Price;
    }

    /**
     * Set Price
     *
     * @return $this
     */
    public function setPrice(float $value)
    {
        $this->Price = $value;

        return $this;
    }
}
