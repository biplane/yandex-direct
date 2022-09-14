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
//    protected $ContextBid = null;

//    Can be omitted.
//    protected $StrategyPriority = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getContextBid(): ?int
    {
        return $this->ContextBid ?? null;
    }

    /**
     * @return $this
     */
    public function setContextBid(?int $value = null)
    {
        $this->ContextBid = $value;

        return $this;
    }

    /**
     * @see PriorityEnum
     */
    public function getStrategyPriority(): ?string
    {
        return $this->StrategyPriority ?? null;
    }

    /**
     * @see PriorityEnum
     *
     * @return $this
     */
    public function setStrategyPriority(?string $value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }
}
