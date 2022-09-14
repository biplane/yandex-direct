<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyWeeklyClickPackageAdd
{
    protected $ClicksPerWeek = null;

//    Can be omitted.
//    protected $AverageCpc = null;

//    Can be omitted.
//    protected $BidCeiling = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getClicksPerWeek(): int
    {
        return $this->ClicksPerWeek;
    }

    /**
     * @return $this
     */
    public function setClicksPerWeek(int $value)
    {
        $this->ClicksPerWeek = $value;

        return $this;
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

    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * @return $this
     */
    public function setBidCeiling(?int $value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }
}
