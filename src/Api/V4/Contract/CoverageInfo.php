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

    public function getPrice(): float
    {
        return $this->Price;
    }

    /**
     * @return $this
     */
    public function setPrice(float $value)
    {
        $this->Price = $value;

        return $this;
    }
}
