<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignStrategyAddBase
{

    protected $WbMaximumClicks = null;

    protected $WbMaximumAppInstalls = null;

    protected $AverageCpc = null;

    protected $AverageCpi = null;

    protected $WeeklyClickPackage = null;

    /**
     * Creates a new instance of MobileAppCampaignStrategyAddBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets WbMaximumClicks.
     *
     * @return StrategyMaximumClicksAdd|null
     */
    public function getWbMaximumClicks()
    {
        return $this->WbMaximumClicks;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @param StrategyMaximumClicksAdd|null $value
     * @return self
     */
    public function setWbMaximumClicks(StrategyMaximumClicksAdd $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Gets WbMaximumAppInstalls.
     *
     * @return StrategyMaximumAppInstallsAdd|null
     */
    public function getWbMaximumAppInstalls()
    {
        return $this->WbMaximumAppInstalls;
    }

    /**
     * Sets WbMaximumAppInstalls.
     *
     * @param StrategyMaximumAppInstallsAdd|null $value
     * @return self
     */
    public function setWbMaximumAppInstalls(StrategyMaximumAppInstallsAdd $value = null)
    {
        $this->WbMaximumAppInstalls = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     *
     * @return StrategyAverageCpcAdd|null
     */
    public function getAverageCpc()
    {
        return $this->AverageCpc;
    }

    /**
     * Sets AverageCpc.
     *
     * @param StrategyAverageCpcAdd|null $value
     * @return self
     */
    public function setAverageCpc(StrategyAverageCpcAdd $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpi.
     *
     * @return StrategyAverageCpiAdd|null
     */
    public function getAverageCpi()
    {
        return $this->AverageCpi;
    }

    /**
     * Sets AverageCpi.
     *
     * @param StrategyAverageCpiAdd|null $value
     * @return self
     */
    public function setAverageCpi(StrategyAverageCpiAdd $value = null)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    /**
     * Gets WeeklyClickPackage.
     *
     * @return StrategyWeeklyClickPackageAdd|null
     */
    public function getWeeklyClickPackage()
    {
        return $this->WeeklyClickPackage;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @param StrategyWeeklyClickPackageAdd|null $value
     * @return self
     */
    public function setWeeklyClickPackage(StrategyWeeklyClickPackageAdd $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }


}

