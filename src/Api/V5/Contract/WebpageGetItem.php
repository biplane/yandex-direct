<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class WebpageGetItem
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $Bid = null;

//    Can be omit.
//    protected $ContextBid = null;

//    Can be omit.
//    protected $StrategyPriority = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $StatusClarification = null;

//    Can be omit.
//    protected $Conditions = null;

//    Can be omit.
//    protected $ConditionType = null;

    /**
     * Creates a new instance of WebpageGetItem.
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
     * @return self
     */
    public function setId($value = null)
    {
        $this->Id = $value;

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
        return isset($this->CampaignId) ? $this->CampaignId : null;
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
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return self
     */
    public function setName($value = null)
    {
        $this->Name = $value;

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
        return isset($this->ContextBid) ? $this->ContextBid : null;
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
        return isset($this->StrategyPriority) ? $this->StrategyPriority : null;
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
        return isset($this->State) ? $this->State : null;
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
     * Gets StatusClarification.
     *
     * @return string|null
     */
    public function getStatusClarification()
    {
        return isset($this->StatusClarification) ? $this->StatusClarification : null;
    }

    /**
     * Sets StatusClarification.
     *
     * @param string|null $value
     * @return self
     */
    public function setStatusClarification($value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Gets Conditions.
     *
     * @return WebpageCondition[]|null
     */
    public function getConditions()
    {
        return isset($this->Conditions) ? $this->Conditions : null;
    }

    /**
     * Sets Conditions.
     *
     * @param WebpageCondition[]|null $value
     * @return self
     */
    public function setConditions(array $value = null)
    {
        $this->Conditions = $value;

        return $this;
    }

    /**
     * Gets ConditionType.
     *
     * @return string|null
     * @see WebpageTypeEnum
     */
    public function getConditionType()
    {
        return isset($this->ConditionType) ? $this->ConditionType : null;
    }

    /**
     * Sets ConditionType.
     *
     * @param string|null $value
     * @return self
     * @see WebpageTypeEnum
     */
    public function setConditionType($value = null)
    {
        $this->ConditionType = $value;

        return $this;
    }


}

