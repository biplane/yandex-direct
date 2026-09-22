<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Campaigns;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyHighestPosition
{
//    Can be omitted.
//    protected $WeeklySpendLimit;

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
     * Get WeeklySpendLimit
     */
    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * Set WeeklySpendLimit
     *
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }
}
