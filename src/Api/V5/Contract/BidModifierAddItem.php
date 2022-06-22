<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifierAddItem extends BidModifierAddBase
{
//    Can be omitted.
//    protected $MobileAdjustment = null;

//    Can be omitted.
//    protected $DesktopAdjustment = null;

//    Can be omitted.
//    protected $SmartTvAdjustment = null;

//    Can be omitted.
//    protected $TabletAdjustment = null;

//    Can be omitted.
//    protected $DesktopOnlyAdjustment = null;

//    Can be omitted.
//    protected $DemographicsAdjustments = null;

//    Can be omitted.
//    protected $RetargetingAdjustments = null;

//    Can be omitted.
//    protected $RegionalAdjustments = null;

//    Can be omitted.
//    protected $VideoAdjustment = null;

//    Can be omitted.
//    protected $SmartAdAdjustment = null;

//    Can be omitted.
//    protected $SerpLayoutAdjustments = null;

//    Can be omitted.
//    protected $IncomeGradeAdjustments = null;

    public function getMobileAdjustment(): ?MobileAdjustmentAdd
    {
        return $this->MobileAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAdjustment(?MobileAdjustmentAdd $value = null)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    public function getDesktopAdjustment(): ?DesktopAdjustmentAdd
    {
        return $this->DesktopAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setDesktopAdjustment(?DesktopAdjustmentAdd $value = null)
    {
        $this->DesktopAdjustment = $value;

        return $this;
    }

    public function getSmartTvAdjustment(): ?SmartTvAdjustmentAdd
    {
        return $this->SmartTvAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartTvAdjustment(?SmartTvAdjustmentAdd $value = null)
    {
        $this->SmartTvAdjustment = $value;

        return $this;
    }

    public function getTabletAdjustment(): ?TabletAdjustmentAdd
    {
        return $this->TabletAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setTabletAdjustment(?TabletAdjustmentAdd $value = null)
    {
        $this->TabletAdjustment = $value;

        return $this;
    }

    public function getDesktopOnlyAdjustment(): ?DesktopOnlyAdjustmentAdd
    {
        return $this->DesktopOnlyAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setDesktopOnlyAdjustment(?DesktopOnlyAdjustmentAdd $value = null)
    {
        $this->DesktopOnlyAdjustment = $value;

        return $this;
    }

    /**
     * @return DemographicsAdjustmentAdd[]|null
     */
    public function getDemographicsAdjustments(): ?array
    {
        return $this->DemographicsAdjustments ?? null;
    }

    /**
     * @param DemographicsAdjustmentAdd[]|null $value
     *
     * @return $this
     */
    public function setDemographicsAdjustments(?array $value = null)
    {
        $this->DemographicsAdjustments = $value;

        return $this;
    }

    /**
     * @return RetargetingAdjustmentAdd[]|null
     */
    public function getRetargetingAdjustments(): ?array
    {
        return $this->RetargetingAdjustments ?? null;
    }

    /**
     * @param RetargetingAdjustmentAdd[]|null $value
     *
     * @return $this
     */
    public function setRetargetingAdjustments(?array $value = null)
    {
        $this->RetargetingAdjustments = $value;

        return $this;
    }

    /**
     * @return RegionalAdjustmentAdd[]|null
     */
    public function getRegionalAdjustments(): ?array
    {
        return $this->RegionalAdjustments ?? null;
    }

    /**
     * @param RegionalAdjustmentAdd[]|null $value
     *
     * @return $this
     */
    public function setRegionalAdjustments(?array $value = null)
    {
        $this->RegionalAdjustments = $value;

        return $this;
    }

    public function getVideoAdjustment(): ?VideoAdjustmentAdd
    {
        return $this->VideoAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setVideoAdjustment(?VideoAdjustmentAdd $value = null)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }

    public function getSmartAdAdjustment(): ?SmartAdAdjustmentAdd
    {
        return $this->SmartAdAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartAdAdjustment(?SmartAdAdjustmentAdd $value = null)
    {
        $this->SmartAdAdjustment = $value;

        return $this;
    }

    /**
     * @return SerpLayoutAdjustmentAdd[]|null
     */
    public function getSerpLayoutAdjustments(): ?array
    {
        return $this->SerpLayoutAdjustments ?? null;
    }

    /**
     * @param SerpLayoutAdjustmentAdd[]|null $value
     *
     * @return $this
     */
    public function setSerpLayoutAdjustments(?array $value = null)
    {
        $this->SerpLayoutAdjustments = $value;

        return $this;
    }

    /**
     * @return IncomeGradeAdjustmentAdd[]|null
     */
    public function getIncomeGradeAdjustments(): ?array
    {
        return $this->IncomeGradeAdjustments ?? null;
    }

    /**
     * @param IncomeGradeAdjustmentAdd[]|null $value
     *
     * @return $this
     */
    public function setIncomeGradeAdjustments(?array $value = null)
    {
        $this->IncomeGradeAdjustments = $value;

        return $this;
    }
}
