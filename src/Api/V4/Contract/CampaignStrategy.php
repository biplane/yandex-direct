<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CampaignStrategy
{
    protected $MaxPrice = null;

    protected $AveragePrice = null;

    protected $WeeklySumLimit = null;

    protected $ClicksPerWeek = null;

    protected $StrategyName = null;

    protected $AverageCPA = null;

    protected $GoalID = null;

    protected $ReserveReturn = null;

    protected $ROICoef = null;

    protected $Profitability = null;

    /**
     * Creates a new instance of CampaignStrategy.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets MaxPrice.
     */
    public function getMaxPrice(): ?float
    {
        return $this->MaxPrice;
    }

    /**
     * Sets MaxPrice.
     *
     * @return $this
     */
    public function setMaxPrice(?float $value = null)
    {
        $this->MaxPrice = $value;

        return $this;
    }

    /**
     * Gets AveragePrice.
     */
    public function getAveragePrice(): ?float
    {
        return $this->AveragePrice;
    }

    /**
     * Sets AveragePrice.
     *
     * @return $this
     */
    public function setAveragePrice(?float $value = null)
    {
        $this->AveragePrice = $value;

        return $this;
    }

    /**
     * Gets WeeklySumLimit.
     */
    public function getWeeklySumLimit(): ?float
    {
        return $this->WeeklySumLimit;
    }

    /**
     * Sets WeeklySumLimit.
     *
     * @return $this
     */
    public function setWeeklySumLimit(?float $value = null)
    {
        $this->WeeklySumLimit = $value;

        return $this;
    }

    /**
     * Gets ClicksPerWeek.
     */
    public function getClicksPerWeek(): ?int
    {
        return $this->ClicksPerWeek;
    }

    /**
     * Sets ClicksPerWeek.
     *
     * @return $this
     */
    public function setClicksPerWeek(?int $value = null)
    {
        $this->ClicksPerWeek = $value;

        return $this;
    }

    /**
     * Gets StrategyName.
     */
    public function getStrategyName(): string
    {
        return $this->StrategyName;
    }

    /**
     * Sets StrategyName.
     *
     * @return $this
     */
    public function setStrategyName(string $value)
    {
        $this->StrategyName = $value;

        return $this;
    }

    /**
     * Gets AverageCPA.
     */
    public function getAverageCPA(): ?float
    {
        return $this->AverageCPA;
    }

    /**
     * Sets AverageCPA.
     *
     * @return $this
     */
    public function setAverageCPA(?float $value = null)
    {
        $this->AverageCPA = $value;

        return $this;
    }

    /**
     * Gets GoalID.
     */
    public function getGoalID(): ?int
    {
        return $this->GoalID;
    }

    /**
     * Sets GoalID.
     *
     * @return $this
     */
    public function setGoalID(?int $value = null)
    {
        $this->GoalID = $value;

        return $this;
    }

    /**
     * Gets ReserveReturn.
     */
    public function getReserveReturn(): ?int
    {
        return $this->ReserveReturn;
    }

    /**
     * Sets ReserveReturn.
     *
     * @return $this
     */
    public function setReserveReturn(?int $value = null)
    {
        $this->ReserveReturn = $value;

        return $this;
    }

    /**
     * Gets ROICoef.
     */
    public function getROICoef(): ?float
    {
        return $this->ROICoef;
    }

    /**
     * Sets ROICoef.
     *
     * @return $this
     */
    public function setROICoef(?float $value = null)
    {
        $this->ROICoef = $value;

        return $this;
    }

    /**
     * Gets Profitability.
     */
    public function getProfitability(): ?float
    {
        return $this->Profitability;
    }

    /**
     * Sets Profitability.
     *
     * @return $this
     */
    public function setProfitability(?float $value = null)
    {
        $this->Profitability = $value;

        return $this;
    }
}
