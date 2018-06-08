<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TargetCoverage.
     *
     * @return int
     */
    public function getTargetCoverage()
    {
        return $this->TargetCoverage;
    }

    /**
     * Sets TargetCoverage.
     *
     * @param int $value
     * @return $this
     */
    public function setTargetCoverage($value)
    {
        $this->TargetCoverage = $value;

        return $this;
    }

    /**
     * Gets IncreasePercent.
     *
     * @return int|null
     */
    public function getIncreasePercent()
    {
        return isset($this->IncreasePercent) ? $this->IncreasePercent : null;
    }

    /**
     * Sets IncreasePercent.
     *
     * @param int|null $value
     * @return $this
     */
    public function setIncreasePercent($value = null)
    {
        $this->IncreasePercent = $value;

        return $this;
    }

    /**
     * Gets BidCeiling.
     *
     * @return int|null
     */
    public function getBidCeiling()
    {
        return isset($this->BidCeiling) ? $this->BidCeiling : null;
    }

    /**
     * Sets BidCeiling.
     *
     * @param int|null $value
     * @return $this
     */
    public function setBidCeiling($value = null)
    {
        $this->BidCeiling = $value;

        return $this;
    }


}

