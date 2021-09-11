<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignStrategyBase
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
     * Creates a new instance of MobileAppCampaignStrategyBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets WbMaximumClicks.
     */
    public function getWbMaximumClicks(): ?StrategyMaximumClicks
    {
        return $this->WbMaximumClicks ?? null;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @return $this
     */
    public function setWbMaximumClicks(?StrategyMaximumClicks $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Gets WbMaximumAppInstalls.
     */
    public function getWbMaximumAppInstalls(): ?StrategyMaximumAppInstalls
    {
        return $this->WbMaximumAppInstalls ?? null;
    }

    /**
     * Sets WbMaximumAppInstalls.
     *
     * @return $this
     */
    public function setWbMaximumAppInstalls(?StrategyMaximumAppInstalls $value = null)
    {
        $this->WbMaximumAppInstalls = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     */
    public function getAverageCpc(): ?StrategyAverageCpc
    {
        return $this->AverageCpc ?? null;
    }

    /**
     * Sets AverageCpc.
     *
     * @return $this
     */
    public function setAverageCpc(?StrategyAverageCpc $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpi.
     */
    public function getAverageCpi(): ?StrategyAverageCpi
    {
        return $this->AverageCpi ?? null;
    }

    /**
     * Sets AverageCpi.
     *
     * @return $this
     */
    public function setAverageCpi(?StrategyAverageCpi $value = null)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    /**
     * Gets WeeklyClickPackage.
     */
    public function getWeeklyClickPackage(): ?StrategyWeeklyClickPackage
    {
        return $this->WeeklyClickPackage ?? null;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @return $this
     */
    public function setWeeklyClickPackage(?StrategyWeeklyClickPackage $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }

    /**
     * Gets PayForInstall.
     */
    public function getPayForInstall(): ?StrategyPayForInstall
    {
        return $this->PayForInstall ?? null;
    }

    /**
     * Sets PayForInstall.
     *
     * @return $this
     */
    public function setPayForInstall(?StrategyPayForInstall $value = null)
    {
        $this->PayForInstall = $value;

        return $this;
    }
}
