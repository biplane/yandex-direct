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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getProbability(): float
    {
        return $this->Probability;
    }

    /**
     * @return $this
     */
    public function setProbability(float $value)
    {
        $this->Probability = $value;

        return $this;
    }

    public function getPrice(): int
    {
        return $this->Price;
    }

    /**
     * @return $this
     */
    public function setPrice(int $value)
    {
        $this->Price = $value;

        return $this;
    }
}
