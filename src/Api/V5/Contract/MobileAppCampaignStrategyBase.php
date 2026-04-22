<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppCampaignStrategyBase
{
//    Can be omitted.
//    protected $WbMaximumClicks;

//    Can be omitted.
//    protected $WbMaximumAppInstalls;

//    Can be omitted.
//    protected $AverageCpc;

//    Can be omitted.
//    protected $AverageCpi;

//    Can be omitted.
//    protected $WeeklyClickPackage;

//    Can be omitted.
//    protected $PayForInstall;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get WbMaximumClicks
     */
    public function getWbMaximumClicks(): ?StrategyMaximumClicks
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Set WbMaximumClicks
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicks $value)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Get WbMaximumAppInstalls
     */
    public function getWbMaximumAppInstalls(): ?StrategyMaximumAppInstalls
    {
        return $this->WbMaximumAppInstalls ?? null;
    }

    /**
     * Set WbMaximumAppInstalls
     *
     * @return $this
     */
    public function setWbMaximumAppInstalls(?StrategyMaximumAppInstalls $value)
    {
        $this->WbMaximumAppInstalls = $value;

        return $this;
    }

    /**
     * Get AverageCpc
     */
    public function getAverageCpc(): ?StrategyAverageCpc
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Set AverageCpc
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpc $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Get AverageCpi
     */
    public function getAverageCpi(): ?StrategyAverageCpi
    {
        return $this->AverageCpi ?? null;
    }

    /**
     * Set AverageCpi
     *
     * @return $this
     */
    public function setAverageCpi(?StrategyAverageCpi $value)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    /**
     * Get WeeklyClickPackage
     */
    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackage
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * Set WeeklyClickPackage
     *
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackage $value)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    /**
     * Get PayForInstall
     */
    public function getPayForInstall(): ?StrategyPayForInstall
    {
        return $this->PayForInstall ?? null;
    }

    /**
     * Set PayForInstall
     *
     * @return $this
     */
    public function setPayForInstall(?StrategyPayForInstall $value)
    {
        $this->PayForInstall = $value;

        return $this;
    }
}
