<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidSetItem
{

    protected $CampaignId = null;

    protected $AdGroupId = null;

    protected $KeywordId = null;

    protected $SearchBid = null;

    protected $NetworkBid = null;

    protected $StrategyPriority = null;

    /**
     * Creates a new instance of KeywordBidSetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return self
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets KeywordId.
     *
     * @return int|null
     */
    public function getKeywordId()
    {
        return $this->KeywordId;
    }

    /**
     * Sets KeywordId.
     *
     * @param int|null $value
     * @return self
     */
    public function setKeywordId($value = null)
    {
        $this->KeywordId = $value;

        return $this;
    }

    /**
     * Gets SearchBid.
     *
     * @return int|null
     */
    public function getSearchBid()
    {
        return $this->SearchBid;
    }

    /**
     * Sets SearchBid.
     *
     * @param int|null $value
     * @return self
     */
    public function setSearchBid($value = null)
    {
        $this->SearchBid = $value;

        return $this;
    }

    /**
     * Gets NetworkBid.
     *
     * @return int|null
     */
    public function getNetworkBid()
    {
        return $this->NetworkBid;
    }

    /**
     * Sets NetworkBid.
     *
     * @param int|null $value
     * @return self
     */
    public function setNetworkBid($value = null)
    {
        $this->NetworkBid = $value;

        return $this;
    }

    /**
     * Gets StrategyPriority.
     *
     * @return string|null
     * @see PriorityEnum
     */
    public function getStrategyPriority()
    {
        return $this->StrategyPriority;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param string|null $value
     * @return self
     * @see PriorityEnum
     */
    public function setStrategyPriority($value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }


}

