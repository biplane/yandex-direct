<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AudienceTargetBase
{
//    Can be omitted.
//    protected $ContextBid;

//    Can be omitted.
//    protected $StrategyPriority;

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
     * Get ContextBid
     */
    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * Set ContextBid
     *
     * @return $this
     */
    public function setContextBid(?int $value)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * Get StrategyPriority
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriorityEnum
     *
     * @return 'LOW'|'NORMAL'|'HIGH'|null
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
     * Set StrategyPriority
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PriorityEnum
     *
     * @param 'LOW'|'NORMAL'|'HIGH'|null $value
     *
     * @return $this
     */
    public function setStrategyPriority(?string $value)
    {
        $this->StrategyPriority = $value;

        return $this;
    }
}
