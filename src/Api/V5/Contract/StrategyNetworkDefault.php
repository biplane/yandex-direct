<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyNetworkDefault
{
//    Can be omit.
//    protected $LimitPercent = null;

    /**
     * Creates a new instance of StrategyNetworkDefault.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets LimitPercent.
     */
    public function getLimitPercent(): ?int
    {
        return $this->LimitPercent ?? null;
    }

    /**
     * Sets LimitPercent.
     *
     * @return $this
     */
    public function setLimitPercent(?int $value = null)
    {
        $this->LimitPercent = $value;

        return $this;
    }
}
