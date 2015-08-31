<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class StatItem
{
    /**
     * @var int
     */
    protected $CampaignID;
    /**
     * @var string
     */
    protected $StatDate;
    /**
     * @var float
     */
    protected $SumSearch;
    /**
     * @var float
     */
    protected $SumContext;
    /**
     * @var int
     */
    protected $ShowsSearch;
    /**
     * @var int
     */
    protected $ShowsContext;
    /**
     * @var int
     */
    protected $ClicksSearch;
    /**
     * @var int
     */
    protected $ClicksContext;
    /**
     * @var float
     */
    protected $SessionDepthSearch;
    /**
     * @var float
     */
    protected $SessionDepthContext;
    /**
     * @var float
     */
    protected $GoalConversionSearch;
    /**
     * @var float
     */
    protected $GoalConversionContext;
    /**
     * @var float
     */
    protected $GoalCostSearch;
    /**
     * @var float
     */
    protected $GoalCostContext;
    /**
     * @var string
     */
    protected $Currency;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the CampaignID.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * Sets the CampaignID.
     *
     * @param int $CampaignID
     *
     * @return StatItem
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;

        return $this;
    }

    /**
     * Gets the StatDate.
     *
     * @return string
     */
    public function getStatDate()
    {
        return $this->StatDate;
    }

    /**
     * Sets the StatDate.
     *
     * @param string $StatDate
     *
     * @return StatItem
     */
    public function setStatDate($StatDate)
    {
        $this->StatDate = $StatDate;

        return $this;
    }

    /**
     * Gets the SumSearch.
     *
     * @return float
     */
    public function getSumSearch()
    {
        return $this->SumSearch;
    }

    /**
     * Sets the SumSearch.
     *
     * @param float $SumSearch
     *
     * @return StatItem
     */
    public function setSumSearch($SumSearch)
    {
        $this->SumSearch = $SumSearch;

        return $this;
    }

    /**
     * Gets the SumContext.
     *
     * @return float
     */
    public function getSumContext()
    {
        return $this->SumContext;
    }

    /**
     * Sets the SumContext.
     *
     * @param float $SumContext
     *
     * @return StatItem
     */
    public function setSumContext($SumContext)
    {
        $this->SumContext = $SumContext;

        return $this;
    }

    /**
     * Gets the ShowsSearch.
     *
     * @return int
     */
    public function getShowsSearch()
    {
        return $this->ShowsSearch;
    }

    /**
     * Sets the ShowsSearch.
     *
     * @param int $ShowsSearch
     *
     * @return StatItem
     */
    public function setShowsSearch($ShowsSearch)
    {
        $this->ShowsSearch = $ShowsSearch;

        return $this;
    }

    /**
     * Gets the ShowsContext.
     *
     * @return int
     */
    public function getShowsContext()
    {
        return $this->ShowsContext;
    }

    /**
     * Sets the ShowsContext.
     *
     * @param int $ShowsContext
     *
     * @return StatItem
     */
    public function setShowsContext($ShowsContext)
    {
        $this->ShowsContext = $ShowsContext;

        return $this;
    }

    /**
     * Gets the ClicksSearch.
     *
     * @return int
     */
    public function getClicksSearch()
    {
        return $this->ClicksSearch;
    }

    /**
     * Sets the ClicksSearch.
     *
     * @param int $ClicksSearch
     *
     * @return StatItem
     */
    public function setClicksSearch($ClicksSearch)
    {
        $this->ClicksSearch = $ClicksSearch;

        return $this;
    }

    /**
     * Gets the ClicksContext.
     *
     * @return int
     */
    public function getClicksContext()
    {
        return $this->ClicksContext;
    }

    /**
     * Sets the ClicksContext.
     *
     * @param int $ClicksContext
     *
     * @return StatItem
     */
    public function setClicksContext($ClicksContext)
    {
        $this->ClicksContext = $ClicksContext;

        return $this;
    }

    /**
     * Gets the SessionDepthSearch.
     *
     * @return float
     */
    public function getSessionDepthSearch()
    {
        return $this->SessionDepthSearch;
    }

    /**
     * Sets the SessionDepthSearch.
     *
     * @param float $SessionDepthSearch
     *
     * @return StatItem
     */
    public function setSessionDepthSearch($SessionDepthSearch)
    {
        $this->SessionDepthSearch = $SessionDepthSearch;

        return $this;
    }

    /**
     * Gets the SessionDepthContext.
     *
     * @return float
     */
    public function getSessionDepthContext()
    {
        return $this->SessionDepthContext;
    }

    /**
     * Sets the SessionDepthContext.
     *
     * @param float $SessionDepthContext
     *
     * @return StatItem
     */
    public function setSessionDepthContext($SessionDepthContext)
    {
        $this->SessionDepthContext = $SessionDepthContext;

        return $this;
    }

    /**
     * Gets the GoalConversionSearch.
     *
     * @return float
     */
    public function getGoalConversionSearch()
    {
        return $this->GoalConversionSearch;
    }

    /**
     * Sets the GoalConversionSearch.
     *
     * @param float $GoalConversionSearch
     *
     * @return StatItem
     */
    public function setGoalConversionSearch($GoalConversionSearch)
    {
        $this->GoalConversionSearch = $GoalConversionSearch;

        return $this;
    }

    /**
     * Gets the GoalConversionContext.
     *
     * @return float
     */
    public function getGoalConversionContext()
    {
        return $this->GoalConversionContext;
    }

    /**
     * Sets the GoalConversionContext.
     *
     * @param float $GoalConversionContext
     *
     * @return StatItem
     */
    public function setGoalConversionContext($GoalConversionContext)
    {
        $this->GoalConversionContext = $GoalConversionContext;

        return $this;
    }

    /**
     * Gets the GoalCostSearch.
     *
     * @return float
     */
    public function getGoalCostSearch()
    {
        return $this->GoalCostSearch;
    }

    /**
     * Sets the GoalCostSearch.
     *
     * @param float $GoalCostSearch
     *
     * @return StatItem
     */
    public function setGoalCostSearch($GoalCostSearch)
    {
        $this->GoalCostSearch = $GoalCostSearch;

        return $this;
    }

    /**
     * Gets the GoalCostContext.
     *
     * @return float
     */
    public function getGoalCostContext()
    {
        return $this->GoalCostContext;
    }

    /**
     * Sets the GoalCostContext.
     *
     * @param float $GoalCostContext
     *
     * @return StatItem
     */
    public function setGoalCostContext($GoalCostContext)
    {
        $this->GoalCostContext = $GoalCostContext;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return StatItem
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}