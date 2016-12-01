<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignStrategyBase
{

    protected $WbMaximumClicks = null;

    protected $WbMaximumAppInstalls = null;

    protected $AverageCpc = null;

    protected $AverageCpi = null;

    protected $WeeklyClickPackage = null;

    /**
     * Creates a new instance of MobileAppCampaignStrategyBase.
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
     * @return StrategyMaximumClicks|null
     */
    public function getWbMaximumClicks()
    {
        return $this->WbMaximumClicks;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @param StrategyMaximumClicks|null $value
     * @return self
     */
    public function setWbMaximumClicks(StrategyMaximumClicks $value = null)
    {
        $this->WbMaximumClicks = $value;

        return $this;
    }

    /**
     * Gets WbMaximumAppInstalls.
     *
     * @return StrategyMaximumAppInstalls|null
     */
    public function getWbMaximumAppInstalls()
    {
        return $this->WbMaximumAppInstalls;
    }

    /**
     * Sets WbMaximumAppInstalls.
     *
     * @param StrategyMaximumAppInstalls|null $value
     * @return self
     */
    public function setWbMaximumAppInstalls(StrategyMaximumAppInstalls $value = null)
    {
        $this->WbMaximumAppInstalls = $value;

        return $this;
    }

    /**
     * Gets AverageCpc.
     *
     * @return StrategyAverageCpc|null
     */
    public function getAverageCpc()
    {
        return $this->AverageCpc;
    }

    /**
     * Sets AverageCpc.
     *
     * @param StrategyAverageCpc|null $value
     * @return self
     */
    public function setAverageCpc(StrategyAverageCpc $value = null)
    {
        $this->AverageCpc = $value;

        return $this;
    }

    /**
     * Gets AverageCpi.
     *
     * @return StrategyAverageCpi|null
     */
    public function getAverageCpi()
    {
        return $this->AverageCpi;
    }

    /**
     * Sets AverageCpi.
     *
     * @param StrategyAverageCpi|null $value
     * @return self
     */
    public function setAverageCpi(StrategyAverageCpi $value = null)
    {
        $this->AverageCpi = $value;

        return $this;
    }

    /**
     * Gets WeeklyClickPackage.
     *
     * @return StrategyWeeklyClickPackage|null
     */
    public function getWeeklyClickPackage()
    {
        return $this->WeeklyClickPackage;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @param StrategyWeeklyClickPackage|null $value
     * @return self
     */
    public function setWeeklyClickPackage(StrategyWeeklyClickPackage $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }


}

