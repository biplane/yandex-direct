<?php

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
        return isset($this->WbMaximumClicks) ? $this->WbMaximumClicks : null;
    }

    /**
     * Sets WbMaximumClicks.
     *
     * @param StrategyMaximumClicks|null $value
     * @return $this
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
        return isset($this->WbMaximumAppInstalls) ? $this->WbMaximumAppInstalls : null;
    }

    /**
     * Sets WbMaximumAppInstalls.
     *
     * @param StrategyMaximumAppInstalls|null $value
     * @return $this
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
        return isset($this->AverageCpc) ? $this->AverageCpc : null;
    }

    /**
     * Sets AverageCpc.
     *
     * @param StrategyAverageCpc|null $value
     * @return $this
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
        return isset($this->AverageCpi) ? $this->AverageCpi : null;
    }

    /**
     * Sets AverageCpi.
     *
     * @param StrategyAverageCpi|null $value
     * @return $this
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
        return isset($this->WeeklyClickPackage) ? $this->WeeklyClickPackage : null;
    }

    /**
     * Sets WeeklyClickPackage.
     *
     * @param StrategyWeeklyClickPackage|null $value
     * @return $this
     */
    public function setWeeklyClickPackage(StrategyWeeklyClickPackage $value = null)
    {
        $this->WeeklyClickPackage = $value;

        return $this;
    }


}

