<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordGetItem
{

    protected $Id = null;

    protected $Keyword = null;

    protected $AdGroupId = null;

    protected $CampaignId = null;

    protected $Bid = null;

    protected $ContextBid = null;

    protected $StrategyPriority = null;

    protected $State = null;

    protected $Status = null;

    protected $UserParam1 = null;

    protected $UserParam2 = null;

    protected $Productivity = null;

    protected $StatisticsSearch = null;

    protected $StatisticsNetwork = null;

    /**
     * Creates a new instance of KeywordGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return self
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Keyword.
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * Sets Keyword.
     *
     * @param string|null $value
     * @return self
     */
    public function setKeyword($value = null)
    {
        $this->Keyword = $value;

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
     * Gets Bid.
     *
     * @return int|null
     */
    public function getBid()
    {
        return $this->Bid;
    }

    /**
     * Sets Bid.
     *
     * @param int|null $value
     * @return self
     */
    public function setBid($value = null)
    {
        $this->Bid = $value;

        return $this;
    }

    /**
     * Gets ContextBid.
     *
     * @return int|null
     */
    public function getContextBid()
    {
        return $this->ContextBid;
    }

    /**
     * Sets ContextBid.
     *
     * @param int|null $value
     * @return self
     */
    public function setContextBid($value = null)
    {
        $this->ContextBid = $value;

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

    /**
     * Gets State.
     *
     * @return string|null
     * @see StateEnum
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return self
     * @see StateEnum
     */
    public function setState($value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     * @see StatusEnum
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return self
     * @see StatusEnum
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets UserParam1.
     *
     * @return string|null
     */
    public function getUserParam1()
    {
        return $this->UserParam1;
    }

    /**
     * Sets UserParam1.
     *
     * @param string|null $value
     * @return self
     */
    public function setUserParam1($value = null)
    {
        $this->UserParam1 = $value;

        return $this;
    }

    /**
     * Gets UserParam2.
     *
     * @return string|null
     */
    public function getUserParam2()
    {
        return $this->UserParam2;
    }

    /**
     * Sets UserParam2.
     *
     * @param string|null $value
     * @return self
     */
    public function setUserParam2($value = null)
    {
        $this->UserParam2 = $value;

        return $this;
    }

    /**
     * Gets Productivity.
     *
     * @return KeywordProductivity|null
     */
    public function getProductivity()
    {
        return $this->Productivity;
    }

    /**
     * Sets Productivity.
     *
     * @param KeywordProductivity|null $value
     * @return self
     */
    public function setProductivity(KeywordProductivity $value = null)
    {
        $this->Productivity = $value;

        return $this;
    }

    /**
     * Gets StatisticsSearch.
     *
     * @return Statistics|null
     */
    public function getStatisticsSearch()
    {
        return $this->StatisticsSearch;
    }

    /**
     * Sets StatisticsSearch.
     *
     * @param Statistics|null $value
     * @return self
     */
    public function setStatisticsSearch(Statistics $value = null)
    {
        $this->StatisticsSearch = $value;

        return $this;
    }

    /**
     * Gets StatisticsNetwork.
     *
     * @return Statistics|null
     */
    public function getStatisticsNetwork()
    {
        return $this->StatisticsNetwork;
    }

    /**
     * Sets StatisticsNetwork.
     *
     * @param Statistics|null $value
     * @return self
     */
    public function setStatisticsNetwork(Statistics $value = null)
    {
        $this->StatisticsNetwork = $value;

        return $this;
    }


}

