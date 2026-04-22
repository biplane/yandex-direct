<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyNetworkDefault
{
//    Can be omitted.
//    protected $LimitPercent;

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
     * Get LimitPercent
     */
    public function getLimitPercent(): ?int
    {
        return $this->LimitPercent ?? null;
    }

    /**
     * Set LimitPercent
     *
     * @return $this
     */
    public function setLimitPercent(?int $value)
    {
        $this->LimitPercent = $value;

        return $this;
    }
}
