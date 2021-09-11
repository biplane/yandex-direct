<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NetworkByCoverage
{
    protected $TargetCoverage = null;

//    Can be omit.
//    protected $IncreasePercent = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of NetworkByCoverage.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TargetCoverage.
     */
    public function getTargetCoverage(): int
    {
        return $this->TargetCoverage;
    }

    /**
     * Sets TargetCoverage.
     *
     * @return $this
     */
    public function setTargetCoverage(int $value)
    {
        $this->TargetCoverage = $value;

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
