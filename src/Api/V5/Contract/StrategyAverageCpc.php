<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCpc
{
//    Can be omitted.
//    protected $AverageCpc = null;

//    Can be omitted.
//    protected $WeeklySpendLimit = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAverageCpc(): ?int
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?int $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getWeeklySpendLimit(): ?int
    {
        return $this->WeeklySpendLimit ?? null;
    }

    /**
     * @return $this
     */
    public function setWeeklySpendLimit(?int $value = null)
    {
        $this->WeeklySpendLimit = $value;

        return $this;
    }
}
