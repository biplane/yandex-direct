<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class NetworkByCoverage
{
    protected $TargetCoverage = null;

//    Can be omitted.
//    protected $IncreasePercent = null;

//    Can be omitted.
//    protected $BidCeiling = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTargetCoverage(): int
    {
        return $this->TargetCoverage;
    }

    /**
     * @return $this
     */
    public function setTargetCoverage(int $value)
    {
        $this->TargetCoverage = $value;

        return $this;
    }

    public function getIncreasePercent(): ?int
    {
        return $this->IncreasePercent ?? null;
    }

    /**
     * @return $this
     */
    public function setIncreasePercent(?int $value = null)
    {
        $this->IncreasePercent = $value;

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
