<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SearchByTrafficVolume
{
    protected $TargetTrafficVolume = null;

//    Can be omit.
//    protected $IncreasePercent = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of SearchByTrafficVolume.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TargetTrafficVolume.
     */
    public function getTargetTrafficVolume(): int
    {
        return $this->TargetTrafficVolume;
    }

    /**
     * Sets TargetTrafficVolume.
     *
     * @return $this
     */
    public function setTargetTrafficVolume(int $value)
    {
        $this->TargetTrafficVolume = $value;

        return $this;
    }

    /**
     * Gets IncreasePercent.
     */
    public function getIncreasePercent(): ?int
    {
        return $this->IncreasePercent ?? null;
    }

    /**
     * Sets IncreasePercent.
     *
     * @return $this
     */
    public function setIncreasePercent(?int $value = null)
    {
        $this->IncreasePercent = $value;

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
