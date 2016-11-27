<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignAddItem
{

    protected $BiddingStrategy = null;

    protected $Settings = null;

    protected $CounterIds = null;

    protected $RelevantKeywords = null;

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
     * @return self
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
        return $this->Settings;
    }

    /**
     * Sets Settings.
     *
     * @param TextCampaignSetting[]|null $value
     * @return self
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Gets CounterIds.
     *
     * @return struct[]|null
     */
    public function getCounterIds()
    {
        return $this->CounterIds;
    }

    /**
     * Sets CounterIds.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setCounterIds(array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Gets RelevantKeywords.
     *
     * @return RelevantKeywordsSetting|null
     */
    public function getRelevantKeywords()
    {
        return $this->RelevantKeywords;
    }

    /**
     * Sets RelevantKeywords.
     *
     * @param RelevantKeywordsSetting|null $value
     * @return self
     */
    public function setRelevantKeywords(RelevantKeywordsSetting $value = null)
    {
        $this->RelevantKeywords = $value;

        return $this;
    }


}

