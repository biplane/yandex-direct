<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppCampaignStrategyAddBase
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
    public static function create()
    {
        return new static();
    }

    /**
     * Get WbMaximumClicks
     */
    public function getWbMaximumClicks(): ?StrategyMaximumClicksAdd
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Set WbMaximumClicks
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksAdd $value)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Get WbMaximumAppInstalls
     */
    public function getWbMaximumAppInstalls(): ?StrategyMaximumAppInstallsAdd
    {
        return $this->WbMaximumAppInstalls ?? null;
    }

    /**
     * Set WbMaximumAppInstalls
     *
     * @return $this
     */
    public function setWbMaximumAppInstalls(?StrategyMaximumAppInstallsAdd $value)
    {
        $this->WbMaximumAppInstalls = $value;

        return $this;
    }

    /**
     * Get AverageCpc
     */
    public function getAverageCpc(): ?StrategyAverageCpcAdd
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Set AverageCpc
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcAdd $value)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Get AverageCpi
     */
    public function getAverageCpi(): ?StrategyAverageCpiAdd
    {
        return $this->AverageCpi ?? null;
    }

    /**
     * Set AverageCpi
     *
     * @return $this
     */
    public function setAverageCpi(?StrategyAverageCpiAdd $value)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    /**
     * Get WeeklyClickPackage
     */
    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackageAdd
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * Set WeeklyClickPackage
     *
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackageAdd $value)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    /**
     * Get PayForInstall
     */
    public function getPayForInstall(): ?StrategyPayForInstallAdd
    {
        return $this->PayForInstall ?? null;
    }

    /**
     * Set PayForInstall
     *
     * @return $this
     */
    public function setPayForInstall(?StrategyPayForInstallAdd $value)
    {
        $this->PayForInstall = $value;

        return $this;
    }
}
