<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SearchByTrafficVolume
{
    /** @var int */
    protected $TargetTrafficVolume;

//    Can be omitted.
//    protected $IncreasePercent;

//    Can be omitted.
//    protected $BidCeiling;

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
     * Get TargetTrafficVolume
     */
    public function getTargetTrafficVolume(): int
    {
        return $this->TargetTrafficVolume;
    }

    /**
     * Set TargetTrafficVolume
     *
     * @return $this
     */
    public function setTargetTrafficVolume(int $value)
    {
        $this->TargetTrafficVolume = $value;

        return $this;
    }

    /**
     * Get IncreasePercent
     */
    public function getIncreasePercent(): ?int
    {
        return $this->IncreasePercent ?? null;
    }

    /**
     * Set IncreasePercent
     *
     * @return $this
     */
    public function setIncreasePercent(?int $value)
    {
        $this->IncreasePercent = $value;

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
