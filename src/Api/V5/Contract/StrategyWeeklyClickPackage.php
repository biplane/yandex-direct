<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyWeeklyClickPackage
{
//    Can be omit.
//    protected $ClicksPerWeek = null;

//    Can be omit.
//    protected $AverageCpc = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyWeeklyClickPackage.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ClicksPerWeek.
     */
    public function getClicksPerWeek(): ?int
    {
        return $this->ClicksPerWeek ?? null;
    }

    /**
     * Sets ClicksPerWeek.
     *
     * @return $this
     */
    public function setClicksPerWeek(?int $value = null)
    {
        $this->ClicksPerWeek = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     */
    public function getAverageCpc(): ?int
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Sets AverageCpc.
     *
     * @return $this
     */
    public function setAverageCpc(?int $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets BidCeiling.
     */
    public function getBidCeiling(): ?int
    {
        return $this->BidCeiling ?? null;
    }

    /**
     * Sets BidCeiling.
     *
     * @return $this
     */
    public function setBidCeiling(?int $value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }
}
