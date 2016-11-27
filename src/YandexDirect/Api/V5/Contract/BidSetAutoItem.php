<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidSetAutoItem
{

    protected $CampaignId = null;

    protected $AdGroupId = null;

    protected $KeywordId = null;

    protected $MaxBid = null;

    protected $Position = null;

    protected $IncreasePercent = null;

    protected $CalculateBy = null;

    protected $ContextCoverage = null;

    protected $Scope = [];

    /**
     * Creates a new instance of BidSetAutoItem.
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
     * Gets MaxBid.
     *
     * @return int|null
     */
    public function getMaxBid()
    {
        return $this->MaxBid;
    }

    /**
     * Sets MaxBid.
     *
     * @param int|null $value
     * @return self
     */
    public function setMaxBid($value = null)
    {
        $this->MaxBid = $value;

        return $this;
    }

    /**
     * Gets Position.
     *
     * @return string|null
     * @see PositionEnum
     */
    public function getPosition()
    {
        return $this->Position;
    }

    /**
     * Sets Position.
     *
     * @param string|null $value
     * @return self
     * @see PositionEnum
     */
    public function setPosition($value = null)
    {
        $this->Position = $value;

        return $this;
    }

    /**
     * Gets IncreasePercent.
     *
     * @return int|null
     */
    public function getIncreasePercent()
    {
        return $this->IncreasePercent;
    }

    /**
     * Sets IncreasePercent.
     *
     * @param int|null $value
     * @return self
     */
    public function setIncreasePercent($value = null)
    {
        $this->IncreasePercent = $value;

        return $this;
    }

    /**
     * Gets CalculateBy.
     *
     * @return string|null
     * @see CalculateByEnum
     */
    public function getCalculateBy()
    {
        return $this->CalculateBy;
    }

    /**
     * Sets CalculateBy.
     *
     * @param string|null $value
     * @return self
     * @see CalculateByEnum
     */
    public function setCalculateBy($value = null)
    {
        $this->CalculateBy = $value;

        return $this;
    }

    /**
     * Gets ContextCoverage.
     *
     * @return int|null
     */
    public function getContextCoverage()
    {
        return $this->ContextCoverage;
    }

    /**
     * Sets ContextCoverage.
     *
     * @param int|null $value
     * @return self
     */
    public function setContextCoverage($value = null)
    {
        $this->ContextCoverage = $value;

        return $this;
    }

    /**
     * Gets Scope.
     *
     * @return string[]
     * @see ScopeEnum
     */
    public function getScope()
    {
        return $this->Scope;
    }

    /**
     * Sets Scope.
     *
     * @param string[] $value
     * @return self
     * @see ScopeEnum
     */
    public function setScope(array $value)
    {
        $this->Scope = $value;

        return $this;
    }


}

