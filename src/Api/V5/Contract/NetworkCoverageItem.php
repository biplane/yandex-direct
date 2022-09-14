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
    protected $Probability = null;

    protected $Bid = null;

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

    public function getBid(): int
    {
        return $this->Bid;
    }

    /**
     * @return $this
     */
    public function setBid(int $value)
    {
        $this->Bid = $value;

        return $this;
    }
}
