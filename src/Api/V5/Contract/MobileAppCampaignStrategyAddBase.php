<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignStrategyAddBase
{
//    Can be omit.
//    protected $WbMaximumClicks = null;

//    Can be omit.
//    protected $WbMaximumAppInstalls = null;

//    Can be omit.
//    protected $AverageCpc = null;

//    Can be omit.
//    protected $AverageCpi = null;

//    Can be omit.
//    protected $WeeklyClickPackage = null;

//    Can be omit.
//    protected $PayForInstall = null;

    /**
     * Creates a new instance of MobileAppCampaignStrategyAddBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets WbMaximumClicks.
     */
    public function getWbMaximumClicks(): ?StrategyMaximumClicksAdd
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksAdd $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Gets WbMaximumAppInstalls.
     */
    public function getWbMaximumAppInstalls(): ?StrategyMaximumAppInstallsAdd
    {
        return $this->WbMaximumAppInstalls ?? null;
    }

    /**
     * Sets WbMaximumAppInstalls.
     *
     * @return $this
     */
    public function setWbMaximumAppInstalls(?StrategyMaximumAppInstallsAdd $value = null)
    {
        $this->WbMaximumAppInstalls = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     */
    public function getAverageCpc(): ?StrategyAverageCpcAdd
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Sets AverageCpc.
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcAdd $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpi.
     */
    public function getAverageCpi(): ?StrategyAverageCpiAdd
    {
        return $this->AverageCpi ?? null;
    }

    /**
     * Sets AverageCpi.
     *
     * @return $this
     */
    public function setAverageCpi(?StrategyAverageCpiAdd $value = null)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    /**
     * Gets WeeklyClickPackage.
     */
    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackageAdd
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackageAdd $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    /**
     * Gets PayForInstall.
     */
    public function getPayForInstall(): ?StrategyPayForInstallAdd
    {
        return $this->PayForInstall ?? null;
    }

    /**
     * Sets PayForInstall.
     *
     * @return $this
     */
    public function setPayForInstall(?StrategyPayForInstallAdd $value = null)
    {
        $this->PayForInstall = $value;

        return $this;
    }
}
