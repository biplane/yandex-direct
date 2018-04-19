<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ClicksPerWeek.
     *
     * @return int|null
     */
    public function getClicksPerWeek()
    {
        return isset($this->ClicksPerWeek) ? $this->ClicksPerWeek : null;
    }

    /**
     * Sets ClicksPerWeek.
     *
     * @param int|null $value
     * @return $this
     */
    public function setClicksPerWeek($value = null)
    {
        $this->ClicksPerWeek = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     *
     * @return int|null
     */
    public function getAverageCpc()
    {
        return isset($this->AverageCpc) ? $this->AverageCpc : null;
    }

    /**
     * Sets AverageCpc.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAverageCpc($value = null)
    {
        $this->AverageCpc = $value;

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

