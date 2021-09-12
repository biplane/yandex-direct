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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignID(): int
    {
        return $this->CampaignID;
    }

    /**
     * @return $this
     */
    public function setCampaignID(int $value)
    {
        $this->CampaignID = $value;

        return $this;
    }

    public function getStatDate(): string
    {
        return $this->StatDate;
    }

    /**
     * @return $this
     */
    public function setStatDate(string $value)
    {
        $this->StatDate = $value;

        return $this;
    }

    public function getSumSearch(): ?float
    {
        return $this->SumSearch;
    }

    /**
     * @return $this
     */
    public function setSumSearch(?float $value = null)
    {
        $this->SumSearch = $value;

        return $this;
    }

    public function getSumContext(): ?float
    {
        return $this->SumContext;
    }

    /**
     * @return $this
     */
    public function setSumContext(?float $value = null)
    {
        $this->SumContext = $value;

        return $this;
    }

    public function getShowsSearch(): ?int
    {
        return $this->ShowsSearch;
    }

    /**
     * @return $this
     */
    public function setShowsSearch(?int $value = null)
    {
        $this->ShowsSearch = $value;

        return $this;
    }

    public function getShowsContext(): ?int
    {
        return $this->ShowsContext;
    }

    /**
     * @return $this
     */
    public function setShowsContext(?int $value = null)
    {
        $this->ShowsContext = $value;

        return $this;
    }

    public function getClicksSearch(): ?int
    {
        return $this->ClicksSearch;
    }

    /**
     * @return $this
     */
    public function setClicksSearch(?int $value = null)
    {
        $this->ClicksSearch = $value;

        return $this;
    }

    public function getClicksContext(): ?int
    {
        return $this->ClicksContext;
    }

    /**
     * @return $this
     */
    public function setClicksContext(?int $value = null)
    {
        $this->ClicksContext = $value;

        return $this;
    }

    public function getSessionDepthSearch(): ?float
    {
        return $this->SessionDepthSearch;
    }

    /**
     * @return $this
     */
    public function setSessionDepthSearch(?float $value = null)
    {
        $this->SessionDepthSearch = $value;

        return $this;
    }

    public function getSessionDepthContext(): ?float
    {
        return $this->SessionDepthContext;
    }

    /**
     * @return $this
     */
    public function setSessionDepthContext(?float $value = null)
    {
        $this->SessionDepthContext = $value;

        return $this;
    }

    public function getGoalConversionSearch(): ?float
    {
        return $this->GoalConversionSearch;
    }

    /**
     * @return $this
     */
    public function setGoalConversionSearch(?float $value = null)
    {
        $this->GoalConversionSearch = $value;

        return $this;
    }

    public function getGoalConversionContext(): ?float
    {
        return $this->GoalConversionContext;
    }

    /**
     * @return $this
     */
    public function setGoalConversionContext(?float $value = null)
    {
        $this->GoalConversionContext = $value;

        return $this;
    }

    public function getGoalCostSearch(): ?float
    {
        return $this->GoalCostSearch;
    }

    /**
     * @return $this
     */
    public function setGoalCostSearch(?float $value = null)
    {
        $this->GoalCostSearch = $value;

        return $this;
    }

    public function getGoalCostContext(): ?float
    {
        return $this->GoalCostContext;
    }

    /**
     * @return $this
     */
    public function setGoalCostContext(?float $value = null)
    {
        $this->GoalCostContext = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
