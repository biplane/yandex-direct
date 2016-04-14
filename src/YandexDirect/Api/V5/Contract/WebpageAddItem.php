<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class WebpageAddItem
{

    protected $Name = null;

    protected $AdGroupId = null;

    protected $Conditions = null;

    protected $Bid = null;

    protected $ContextBid = null;

    protected $StrategyPriority = null;

    /**
     * Creates a new instance of WebpageAddItem.
     *
     * @return WebpageAddItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int $value
     * @return $this
     */
    public function setAdGroupId($value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Conditions.
     *
     * @return WebpageCondition[]|null
     */
    public function getConditions()
    {
        return $this->Conditions;
    }

    /**
     * Sets Conditions.
     *
     * @param WebpageCondition[]|null $value
     * @return $this
     */
    public function setConditions(array $value = null)
    {
        $this->Conditions = $value;

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
        return $this->ContextBid;
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
     * @return PriorityEnum|null
     */
    public function getStrategyPriority()
    {
        return $this->StrategyPriority;
    }

    /**
     * Sets StrategyPriority.
     *
     * @param PriorityEnum|null $value
     * @return $this
     */
    public function setStrategyPriority(PriorityEnum $value = null)
    {
        $this->StrategyPriority = $value;

        return $this;
    }


}

