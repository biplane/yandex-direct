<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartCampaignStrategyBase
{

//    Can be omit.
//    protected $AverageCpcPerCampaign = null;

//    Can be omit.
//    protected $AverageCpcPerFilter = null;

//    Can be omit.
//    protected $AverageCpaPerCampaign = null;

//    Can be omit.
//    protected $AverageCpaPerFilter = null;

//    Can be omit.
//    protected $AverageRoi = null;

    /**
     * Creates a new instance of SmartCampaignStrategyBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets AverageCpcPerCampaign.
     *
     * @return StrategyAverageCpcPerCampaign|null
     */
    public function getAverageCpcPerCampaign()
    {
        return isset($this->AverageCpcPerCampaign) ? $this->AverageCpcPerCampaign : null;
    }

    /**
     * Sets AverageCpcPerCampaign.
     *
     * @param StrategyAverageCpcPerCampaign|null $value
     * @return $this
     */
    public function setAverageCpcPerCampaign(StrategyAverageCpcPerCampaign $value = null)
    {
        $this->AverageCpcPerCampaign = $value;

        return $this;
    }

    /**
     * Gets AverageCpcPerFilter.
     *
     * @return StrategyAverageCpcPerFilter|null
     */
    public function getAverageCpcPerFilter()
    {
        return isset($this->AverageCpcPerFilter) ? $this->AverageCpcPerFilter : null;
    }

    /**
     * Sets AverageCpcPerFilter.
     *
     * @param StrategyAverageCpcPerFilter|null $value
     * @return $this
     */
    public function setAverageCpcPerFilter(StrategyAverageCpcPerFilter $value = null)
    {
        $this->AverageCpcPerFilter = $value;

        return $this;
    }

    /**
     * Gets AverageCpaPerCampaign.
     *
     * @return StrategyAverageCpaPerCampaign|null
     */
    public function getAverageCpaPerCampaign()
    {
        return isset($this->AverageCpaPerCampaign) ? $this->AverageCpaPerCampaign : null;
    }

    /**
     * Sets AverageCpaPerCampaign.
     *
     * @param StrategyAverageCpaPerCampaign|null $value
     * @return $this
     */
    public function setAverageCpaPerCampaign(StrategyAverageCpaPerCampaign $value = null)
    {
        $this->AverageCpaPerCampaign = $value;

        return $this;
    }

    /**
     * Gets AverageCpaPerFilter.
     *
     * @return StrategyAverageCpaPerFilter|null
     */
    public function getAverageCpaPerFilter()
    {
        return isset($this->AverageCpaPerFilter) ? $this->AverageCpaPerFilter : null;
    }

    /**
     * Sets AverageCpaPerFilter.
     *
     * @param StrategyAverageCpaPerFilter|null $value
     * @return $this
     */
    public function setAverageCpaPerFilter(StrategyAverageCpaPerFilter $value = null)
    {
        $this->AverageCpaPerFilter = $value;

        return $this;
    }

    /**
     * Gets AverageRoi.
     *
     * @return StrategyAverageRoi|null
     */
    public function getAverageRoi()
    {
        return isset($this->AverageRoi) ? $this->AverageRoi : null;
    }

    /**
     * Sets AverageRoi.
     *
     * @param StrategyAverageRoi|null $value
     * @return $this
     */
    public function setAverageRoi(StrategyAverageRoi $value = null)
    {
        $this->AverageRoi = $value;

        return $this;
    }


}

