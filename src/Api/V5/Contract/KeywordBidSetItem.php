<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidSetItem
{

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $KeywordId = null;

//    Can be omit.
//    protected $SearchBid = null;

//    Can be omit.
//    protected $NetworkBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

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
        return isset($this->CampaignId) ? $this->CampaignId : null;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->AdGroupId) ? $this->AdGroupId : null;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->KeywordId) ? $this->KeywordId : null;
    }

    /**
     * Sets KeywordId.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->SearchBid) ? $this->SearchBid : null;
    }

    /**
     * Sets SearchBid.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->NetworkBid) ? $this->NetworkBid : null;
    }

    /**
     * Sets NetworkBid.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->StrategyPriority) ? $this->StrategyPriority : null;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param string|null $value
     * @return $this
     * @see PriorityEnum
     */
    public function setStrategyPriority($value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }


}

