<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpaPerCampaign
{

//    Can be omit.
//    protected $AverageCpa = null;

//    Can be omit.
//    protected $GoalId = null;

//    Can be omit.
//    protected $WeeklySpendLimit = null;

//    Can be omit.
//    protected $BidCeiling = null;

    /**
     * Creates a new instance of StrategyAverageCpaPerCampaign.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpa.
     *
     * @return int|null
     */
    public function getAverageCpa()
    {
        return isset($this->AverageCpa) ? $this->AverageCpa : null;
    }

    /**
     * Sets AverageCpa.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAverageCpa($value = null)
    {
        $this->AverageCpa = $value;

        return $this;
    }

    /**
     * Gets GoalId.
     *
     * @return int|null
     */
    public function getGoalId()
    {
        return isset($this->GoalId) ? $this->GoalId : null;
    }

    /**
     * Sets GoalId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setGoalId($value = null)
    {
        $this->GoalId = $value;

        return $this;
    }

    /**
     * Gets WeeklySpendLimit.
     *
     * @return int|null
     */
    public function getWeeklySpendLimit()
    {
        return isset($this->WeeklySpendLimit) ? $this->WeeklySpendLimit : null;
    }

    /**
     * Sets WeeklySpendLimit.
     *
     * @param int|null $value
     * @return $this
     */
    public function setWeeklySpendLimit($value = null)
    {
        $this->WeeklySpendLimit = $value;

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

