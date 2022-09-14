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

    public function getWbMaximumClicks(): ?StrategyMaximumClicks
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicks $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    public function getWbMaximumAppInstalls(): ?StrategyMaximumAppInstalls
    {
        return $this->WbMaximumAppInstalls ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumAppInstalls(?StrategyMaximumAppInstalls $value = null)
    {
        $this->WbMaximumAppInstalls = $value;

        return $this;
    }

    public function getAverageCpc(): ?StrategyAverageCpc
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpc $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    public function getAverageCpi(): ?StrategyAverageCpi
    {
        return $this->AverageCpi ?? null;
    }

    /**
     * @return $this
     */
    public function setAverageCpi(?StrategyAverageCpi $value = null)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackage
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackage $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    public function getPayForInstall(): ?StrategyPayForInstall
    {
        return $this->PayForInstall ?? null;
    }

    /**
     * @return $this
     */
    public function setPayForInstall(?StrategyPayForInstall $value = null)
    {
        $this->PayForInstall = $value;

        return $this;
    }
}
