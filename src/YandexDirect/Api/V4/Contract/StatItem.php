<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class StatItem
{

    protected $CampaignID = null;

    protected $StatDate = null;

    protected $SumSearch = null;

    protected $SumContext = null;

    protected $ShowsSearch = null;

    protected $ShowsContext = null;

    protected $ClicksSearch = null;

    protected $ClicksContext = null;

    protected $SessionDepthSearch = null;

    protected $SessionDepthContext = null;

    protected $GoalConversionSearch = null;

    protected $GoalConversionContext = null;

    protected $GoalCostSearch = null;

    protected $GoalCostContext = null;

    protected $Currency = null;

    /**
     * Creates a new instance of StatItem.
     *
     * @return StatItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignID($value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets StatDate.
     *
     * @return string
     */
    public function getStatDate()
    {
        return $this->StatDate;
    }

    /**
     * Sets StatDate.
     *
     * @param string $value
     * @return $this
     */
    public function setStatDate($value)
    {
        $this->StatDate = $value;

        return $this;
    }

    /**
     * Gets SumSearch.
     *
     * @return float|null
     */
    public function getSumSearch()
    {
        return $this->SumSearch;
    }

    /**
     * Sets SumSearch.
     *
     * @param float|null $value
     * @return $this
     */
    public function setSumSearch($value = null)
    {
        $this->SumSearch = $value;

        return $this;
    }

    /**
     * Gets SumContext.
     *
     * @return float|null
     */
    public function getSumContext()
    {
        return $this->SumContext;
    }

    /**
     * Sets SumContext.
     *
     * @param float|null $value
     * @return $this
     */
    public function setSumContext($value = null)
    {
        $this->SumContext = $value;

        return $this;
    }

    /**
     * Gets ShowsSearch.
     *
     * @return int|null
     */
    public function getShowsSearch()
    {
        return $this->ShowsSearch;
    }

    /**
     * Sets ShowsSearch.
     *
     * @param int|null $value
     * @return $this
     */
    public function setShowsSearch($value = null)
    {
        $this->ShowsSearch = $value;

        return $this;
    }

    /**
     * Gets ShowsContext.
     *
     * @return int|null
     */
    public function getShowsContext()
    {
        return $this->ShowsContext;
    }

    /**
     * Sets ShowsContext.
     *
     * @param int|null $value
     * @return $this
     */
    public function setShowsContext($value = null)
    {
        $this->ShowsContext = $value;

        return $this;
    }

    /**
     * Gets ClicksSearch.
     *
     * @return int|null
     */
    public function getClicksSearch()
    {
        return $this->ClicksSearch;
    }

    /**
     * Sets ClicksSearch.
     *
     * @param int|null $value
     * @return $this
     */
    public function setClicksSearch($value = null)
    {
        $this->ClicksSearch = $value;

        return $this;
    }

    /**
     * Gets ClicksContext.
     *
     * @return int|null
     */
    public function getClicksContext()
    {
        return $this->ClicksContext;
    }

    /**
     * Sets ClicksContext.
     *
     * @param int|null $value
     * @return $this
     */
    public function setClicksContext($value = null)
    {
        $this->ClicksContext = $value;

        return $this;
    }

    /**
     * Gets SessionDepthSearch.
     *
     * @return float|null
     */
    public function getSessionDepthSearch()
    {
        return $this->SessionDepthSearch;
    }

    /**
     * Sets SessionDepthSearch.
     *
     * @param float|null $value
     * @return $this
     */
    public function setSessionDepthSearch($value = null)
    {
        $this->SessionDepthSearch = $value;

        return $this;
    }

    /**
     * Gets SessionDepthContext.
     *
     * @return float|null
     */
    public function getSessionDepthContext()
    {
        return $this->SessionDepthContext;
    }

    /**
     * Sets SessionDepthContext.
     *
     * @param float|null $value
     * @return $this
     */
    public function setSessionDepthContext($value = null)
    {
        $this->SessionDepthContext = $value;

        return $this;
    }

    /**
     * Gets GoalConversionSearch.
     *
     * @return float|null
     */
    public function getGoalConversionSearch()
    {
        return $this->GoalConversionSearch;
    }

    /**
     * Sets GoalConversionSearch.
     *
     * @param float|null $value
     * @return $this
     */
    public function setGoalConversionSearch($value = null)
    {
        $this->GoalConversionSearch = $value;

        return $this;
    }

    /**
     * Gets GoalConversionContext.
     *
     * @return float|null
     */
    public function getGoalConversionContext()
    {
        return $this->GoalConversionContext;
    }

    /**
     * Sets GoalConversionContext.
     *
     * @param float|null $value
     * @return $this
     */
    public function setGoalConversionContext($value = null)
    {
        $this->GoalConversionContext = $value;

        return $this;
    }

    /**
     * Gets GoalCostSearch.
     *
     * @return float|null
     */
    public function getGoalCostSearch()
    {
        return $this->GoalCostSearch;
    }

    /**
     * Sets GoalCostSearch.
     *
     * @param float|null $value
     * @return $this
     */
    public function setGoalCostSearch($value = null)
    {
        $this->GoalCostSearch = $value;

        return $this;
    }

    /**
     * Gets GoalCostContext.
     *
     * @return float|null
     */
    public function getGoalCostContext()
    {
        return $this->GoalCostContext;
    }

    /**
     * Sets GoalCostContext.
     *
     * @param float|null $value
     * @return $this
     */
    public function setGoalCostContext($value = null)
    {
        $this->GoalCostContext = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }


}

