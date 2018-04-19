<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidSetAutoItem
{

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $KeywordId = null;

//    Can be omit.
//    protected $MaxBid = null;

//    Can be omit.
//    protected $Position = null;

//    Can be omit.
//    protected $IncreasePercent = null;

//    Can be omit.
//    protected $CalculateBy = null;

//    Can be omit.
//    protected $ContextCoverage = null;

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
        return isset($this->MaxBid) ? $this->MaxBid : null;
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
        return isset($this->Position) ? $this->Position : null;
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
        return isset($this->IncreasePercent) ? $this->IncreasePercent : null;
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
        return isset($this->CalculateBy) ? $this->CalculateBy : null;
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
        return isset($this->ContextCoverage) ? $this->ContextCoverage : null;
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

