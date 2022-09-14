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
//    protected $WbMaximumClicks = null;

//    Can be omitted.
//    protected $WbMaximumAppInstalls = null;

//    Can be omitted.
//    protected $AverageCpc = null;

//    Can be omitted.
//    protected $AverageCpi = null;

//    Can be omitted.
//    protected $WeeklyClickPackage = null;

//    Can be omitted.
//    protected $PayForInstall = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getWbMaximumClicks(): ?StrategyMaximumClicksAdd
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicksAdd $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    public function getWbMaximumAppInstalls(): ?StrategyMaximumAppInstallsAdd
    {
        return $this->WbMaximumAppInstalls ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumAppInstalls(?StrategyMaximumAppInstallsAdd $value = null)
    {
        $this->WbMaximumAppInstalls = $value;

        return $this;
    }

    public function getAverageCpc(): ?StrategyAverageCpcAdd
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpcAdd $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getAverageCpi(): ?StrategyAverageCpiAdd
    {
        return $this->AverageCpi ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpi(?StrategyAverageCpiAdd $value = null)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackageAdd
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackageAdd $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    public function getPayForInstall(): ?StrategyPayForInstallAdd
    {
        return $this->PayForInstall ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForInstall(?StrategyPayForInstallAdd $value = null)
    {
        $this->PayForInstall = $value;

        return $this;
    }
}
