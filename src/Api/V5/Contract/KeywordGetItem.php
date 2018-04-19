<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordGetItem
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Keyword = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $Bid = null;

//    Can be omit.
//    protected $ContextBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $UserParam1 = null;

//    Can be omit.
//    protected $UserParam2 = null;

//    Can be omit.
//    protected $Productivity = null;

//    Can be omit.
//    protected $StatisticsSearch = null;

//    Can be omit.
//    protected $StatisticsNetwork = null;

//    Can be omit.
//    protected $ServingStatus = null;

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
        return isset($this->Id) ? $this->Id : null;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->Keyword) ? $this->Keyword : null;
    }

    /**
     * Sets Keyword.
     *
     * @param string|null $value
     * @return $this
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
     * Gets Bid.
     *
     * @return int|null
     */
    public function getBid()
    {
        return isset($this->Bid) ? $this->Bid : null;
    }

    /**
     * Sets Bid.
     *
     * @param int|null $value
     * @return $this
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
        return isset($this->ContextBid) ? $this->ContextBid : null;
    }

    /**
     * Sets ContextBid.
     *
     * @param int|null $value
     * @return $this
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

    /**
     * Gets State.
     *
     * @return string|null
     * @see StateEnum
     */
    public function getState()
    {
        return isset($this->State) ? $this->State : null;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Status) ? $this->Status : null;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->UserParam1) ? $this->UserParam1 : null;
    }

    /**
     * Sets UserParam1.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->UserParam2) ? $this->UserParam2 : null;
    }

    /**
     * Sets UserParam2.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Productivity) ? $this->Productivity : null;
    }

    /**
     * Sets Productivity.
     *
     * @param KeywordProductivity|null $value
     * @return $this
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
        return isset($this->StatisticsSearch) ? $this->StatisticsSearch : null;
    }

    /**
     * Sets StatisticsSearch.
     *
     * @param Statistics|null $value
     * @return $this
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
        return isset($this->StatisticsNetwork) ? $this->StatisticsNetwork : null;
    }

    /**
     * Sets StatisticsNetwork.
     *
     * @param Statistics|null $value
     * @return $this
     */
    public function setStatisticsNetwork(Statistics $value = null)
    {
        $this->StatisticsNetwork = $value;

        return $this;
    }

    /**
     * Gets ServingStatus.
     *
     * @return string|null
     * @see ServingStatusEnum
     */
    public function getServingStatus()
    {
        return isset($this->ServingStatus) ? $this->ServingStatus : null;
    }

    /**
     * Sets ServingStatus.
     *
     * @param string|null $value
     * @return $this
     * @see ServingStatusEnum
     */
    public function setServingStatus($value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }


}

