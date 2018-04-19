<?php

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
        return isset($this->WbMaximumClicks) ? $this->WbMaximumClicks : null;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @param StrategyMaximumClicksAdd|null $value
     * @return $this
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
        return isset($this->WbMaximumAppInstalls) ? $this->WbMaximumAppInstalls : null;
    }

    /**
     * Sets WbMaximumAppInstalls.
     *
     * @param StrategyMaximumAppInstallsAdd|null $value
     * @return $this
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
        return isset($this->AverageCpc) ? $this->AverageCpc : null;
    }

    /**
     * Sets AverageCpc.
     *
     * @param StrategyAverageCpcAdd|null $value
     * @return $this
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
        return isset($this->AverageCpi) ? $this->AverageCpi : null;
    }

    /**
     * Sets AverageCpi.
     *
     * @param StrategyAverageCpiAdd|null $value
     * @return $this
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
        return isset($this->WeeklyClickPackage) ? $this->WeeklyClickPackage : null;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @param StrategyWeeklyClickPackageAdd|null $value
     * @return $this
     */
    public function setWeeklyClickPackage(StrategyWeeklyClickPackageAdd $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }


}

