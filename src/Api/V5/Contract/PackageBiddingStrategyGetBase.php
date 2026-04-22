<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PackageBiddingStrategyGetBase
{
    /** @var int */
    protected $StrategyId;

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
     * Get StrategyId
     */
    public function getStrategyId(): int
    {
        return $this->StrategyId;
    }

    /**
     * Set StrategyId
     *
     * @return $this
     */
    public function setStrategyId(int $value)
    {
        $this->StrategyId = $value;

        return $this;
    }
}
