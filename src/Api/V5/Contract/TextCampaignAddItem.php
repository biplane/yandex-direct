<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignAddItem
{

    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

//    Can be omit.
//    protected $CounterIds = null;

//    Can be omit.
//    protected $RelevantKeywords = null;

//    Can be omit.
//    protected $PriorityGoals = null;

    /**
     * Creates a new instance of TextCampaignAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     *
     * @return TextCampaignStrategyAdd
     */
    public function getBiddingStrategy()
    {
        return $this->BiddingStrategy;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param TextCampaignStrategyAdd $value
     * @return $this
     */
    public function setBiddingStrategy(TextCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return TextCampaignSetting[]|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param TextCampaignSetting[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets CounterIds.
     *
     * @return int[]|null
     */
    public function getCounterIds()
    {
        return isset($this->CounterIds) ? $this->CounterIds : null;
    }

    /**
     * Sets CounterIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCounterIds(array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Gets RelevantKeywords.
     *
     * @return RelevantKeywordsSettingAdd|null
     */
    public function getRelevantKeywords()
    {
        return isset($this->RelevantKeywords) ? $this->RelevantKeywords : null;
    }

    /**
     * Sets RelevantKeywords.
     *
     * @param RelevantKeywordsSettingAdd|null $value
     * @return $this
     */
    public function setRelevantKeywords(RelevantKeywordsSettingAdd $value = null)
    {
        $this->RelevantKeywords = $value;

        return $this;
    }

    /**
     * Gets PriorityGoals.
     *
     * @return PriorityGoalsArray|null
     */
    public function getPriorityGoals()
    {
        return isset($this->PriorityGoals) ? $this->PriorityGoals : null;
    }

    /**
     * Sets PriorityGoals.
     *
     * @param PriorityGoalsArray|null $value
     * @return $this
     */
    public function setPriorityGoals(PriorityGoalsArray $value = null)
    {
        $this->PriorityGoals = $value;

        return $this;
    }


}

