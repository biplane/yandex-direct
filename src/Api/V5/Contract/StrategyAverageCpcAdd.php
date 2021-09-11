<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpcAdd
{
    protected $AverageCpc = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

    /**
     * Creates a new instance of StrategyAverageCpcAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AverageCpc.
     */
    public function getAverageCpc(): int
    {
        return $this->AverageCpc;
    }

    /**
     * Sets AverageCpc.
     *
     * @return $this
     */
    public function setAverageCpc(int $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets WeeklySpendLimit.
     */
    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }
}
