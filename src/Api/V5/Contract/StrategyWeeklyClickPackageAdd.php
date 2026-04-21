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
    /** @var int */
    protected $ClicksPerWeek;

//    Can be omitted.
//    protected $AverageCpc;

//    Can be omitted.
//    protected $BidCeiling;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get ClicksPerWeek
     */
    public function getClicksPerWeek(): int
    {
        return $this->ClicksPerWeek;
    }

    /**
     * Set ClicksPerWeek
     *
     * @return $this
     */
    public function setClicksPerWeek(int $value)
    {
        $this->ClicksPerWeek = $value;

        return $this;
    }

    /**
     * Get AverageCpc
     */
    public function getAverageCpc(): ?int
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Set AverageCpc
     *
     * @return $this
     */
    public function setAverageCpc(?int $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Get BidCeiling
     */
    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * Set BidCeiling
     *
     * @return $this
     */
    public function setBidCeiling(?int $value)
    {
        $this->BidCeiling = $value;

        return $this;
    }
}
