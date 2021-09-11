<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignID.
     */
    public function getCampaignID(): int
    {
        return $this->CampaignID;
    }

    /**
     * Sets CampaignID.
     *
     * @return $this
     */
    public function setCampaignID(int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    /**
     * Gets StatDate.
     */
    public function getStatDate(): string
    {
        return $this->StatDate;
    }

    /**
     * Sets StatDate.
     *
     * @return $this
     */
    public function setStatDate(string $value)
    {
        $this->StatDate = $value;

        return $this;
    }

    /**
     * Gets SumSearch.
     */
    public function getSumSearch(): ?float
    {
        return $this->SumSearch;
    }

    /**
     * Sets SumSearch.
     *
     * @return $this
     */
    public function setSumSearch(?float $value = null)
    {
        $this->SumSearch = $value;

        return $this;
    }

    /**
     * Gets SumContext.
     */
    public function getSumContext(): ?float
    {
        return $this->SumContext;
    }

    /**
     * Sets SumContext.
     *
     * @return $this
     */
    public function setSumContext(?float $value = null)
    {
        $this->SumContext = $value;

        return $this;
    }

    /**
     * Gets ShowsSearch.
     */
    public function getShowsSearch(): ?int
    {
        return $this->ShowsSearch;
    }

    /**
     * Sets ShowsSearch.
     *
     * @return $this
     */
    public function setShowsSearch(?int $value = null)
    {
        $this->ShowsSearch = $value;

        return $this;
    }

    /**
     * Gets ShowsContext.
     */
    public function getShowsContext(): ?int
    {
        return $this->ShowsContext;
    }

    /**
     * Sets ShowsContext.
     *
     * @return $this
     */
    public function setShowsContext(?int $value = null)
    {
        $this->ShowsContext = $value;

        return $this;
    }

    /**
     * Gets ClicksSearch.
     */
    public function getClicksSearch(): ?int
    {
        return $this->ClicksSearch;
    }

    /**
     * Sets ClicksSearch.
     *
     * @return $this
     */
    public function setClicksSearch(?int $value = null)
    {
        $this->ClicksSearch = $value;

        return $this;
    }

    /**
     * Gets ClicksContext.
     */
    public function getClicksContext(): ?int
    {
        return $this->ClicksContext;
    }

    /**
     * Sets ClicksContext.
     *
     * @return $this
     */
    public function setClicksContext(?int $value = null)
    {
        $this->ClicksContext = $value;

        return $this;
    }

    /**
     * Gets SessionDepthSearch.
     */
    public function getSessionDepthSearch(): ?float
    {
        return $this->SessionDepthSearch;
    }

    /**
     * Sets SessionDepthSearch.
     *
     * @return $this
     */
    public function setSessionDepthSearch(?float $value = null)
    {
        $this->SessionDepthSearch = $value;

        return $this;
    }

    /**
     * Gets SessionDepthContext.
     */
    public function getSessionDepthContext(): ?float
    {
        return $this->SessionDepthContext;
    }

    /**
     * Sets SessionDepthContext.
     *
     * @return $this
     */
    public function setSessionDepthContext(?float $value = null)
    {
        $this->SessionDepthContext = $value;

        return $this;
    }

    /**
     * Gets GoalConversionSearch.
     */
    public function getGoalConversionSearch(): ?float
    {
        return $this->GoalConversionSearch;
    }

    /**
     * Sets GoalConversionSearch.
     *
     * @return $this
     */
    public function setGoalConversionSearch(?float $value = null)
    {
        $this->GoalConversionSearch = $value;

        return $this;
    }

    /**
     * Gets GoalConversionContext.
     */
    public function getGoalConversionContext(): ?float
    {
        return $this->GoalConversionContext;
    }

    /**
     * Sets GoalConversionContext.
     *
     * @return $this
     */
    public function setGoalConversionContext(?float $value = null)
    {
        $this->GoalConversionContext = $value;

        return $this;
    }

    /**
     * Gets GoalCostSearch.
     */
    public function getGoalCostSearch(): ?float
    {
        return $this->GoalCostSearch;
    }

    /**
     * Sets GoalCostSearch.
     *
     * @return $this
     */
    public function setGoalCostSearch(?float $value = null)
    {
        $this->GoalCostSearch = $value;

        return $this;
    }

    /**
     * Gets GoalCostContext.
     */
    public function getGoalCostContext(): ?float
    {
        return $this->GoalCostContext;
    }

    /**
     * Sets GoalCostContext.
     *
     * @return $this
     */
    public function setGoalCostContext(?float $value = null)
    {
        $this->GoalCostContext = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
