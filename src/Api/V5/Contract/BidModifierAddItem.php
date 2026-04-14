<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BidModifierAddItem extends BidModifierAddBase
{
//    Can be omitted.
//    protected $MobileAdjustment;

//    Can be omitted.
//    protected $DesktopAdjustment;

//    Can be omitted.
//    protected $SmartTvAdjustment;

//    Can be omitted.
//    protected $TabletAdjustment;

//    Can be omitted.
//    protected $DesktopOnlyAdjustment;

//    Can be omitted.
//    protected $DemographicsAdjustments;

//    Can be omitted.
//    protected $RetargetingAdjustments;

//    Can be omitted.
//    protected $RegionalAdjustments;

//    Can be omitted.
//    protected $VideoAdjustment;

//    Can be omitted.
//    protected $SmartAdAdjustment;

//    Can be omitted.
//    protected $SerpLayoutAdjustments;

//    Can be omitted.
//    protected $IncomeGradeAdjustments;

//    Can be omitted.
//    protected $AdGroupAdjustment;

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
     * Get MobileAdjustment
     */
    public function getMobileAdjustment(): ?MobileAdjustmentAdd
    {
        return $this->MobileAdjustment ?? null;
    }

    /**
     * Set MobileAdjustment
     *
     * @return $this
     */
    public function setMobileAdjustment(?MobileAdjustmentAdd $value)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    /**
     * Get DesktopAdjustment
     */
    public function getDesktopAdjustment(): ?DesktopAdjustmentAdd
    {
        return $this->DesktopAdjustment ?? null;
    }

    /**
     * Set DesktopAdjustment
     *
     * @return $this
     */
    public function setDesktopAdjustment(?DesktopAdjustmentAdd $value)
    {
        $this->DesktopAdjustment = $value;

        return $this;
    }

    /**
     * Get SmartTvAdjustment
     */
    public function getSmartTvAdjustment(): ?SmartTvAdjustmentAdd
    {
        return $this->SmartTvAdjustment ?? null;
    }

    /**
     * Set SmartTvAdjustment
     *
     * @return $this
     */
    public function setSmartTvAdjustment(?SmartTvAdjustmentAdd $value)
    {
        $this->SmartTvAdjustment = $value;

        return $this;
    }

    /**
     * Get TabletAdjustment
     */
    public function getTabletAdjustment(): ?TabletAdjustmentAdd
    {
        return $this->TabletAdjustment ?? null;
    }

    /**
     * Set TabletAdjustment
     *
     * @return $this
     */
    public function setTabletAdjustment(?TabletAdjustmentAdd $value)
    {
        $this->TabletAdjustment = $value;

        return $this;
    }

    /**
     * Get DesktopOnlyAdjustment
     */
    public function getDesktopOnlyAdjustment(): ?DesktopOnlyAdjustmentAdd
    {
        return $this->DesktopOnlyAdjustment ?? null;
    }

    /**
     * Set DesktopOnlyAdjustment
     *
     * @return $this
     */
    public function setDesktopOnlyAdjustment(?DesktopOnlyAdjustmentAdd $value)
    {
        $this->DesktopOnlyAdjustment = $value;

        return $this;
    }

    /**
     * Get DemographicsAdjustments
     *
     * @return list<DemographicsAdjustmentAdd>
     */
    public function getDemographicsAdjustments(): array
    {
        return $this->DemographicsAdjustments ?? [];
    }

    /**
     * Set DemographicsAdjustments
     *
     * @param list<DemographicsAdjustmentAdd> $value
     *
     * @return $this
     */
    public function setDemographicsAdjustments(array $value)
    {
        $this->DemographicsAdjustments = $value;

        return $this;
    }

    /**
     * Get RetargetingAdjustments
     *
     * @return list<RetargetingAdjustmentAdd>
     */
    public function getRetargetingAdjustments(): array
    {
        return $this->RetargetingAdjustments ?? [];
    }

    /**
     * Set RetargetingAdjustments
     *
     * @param list<RetargetingAdjustmentAdd> $value
     *
     * @return $this
     */
    public function setRetargetingAdjustments(array $value)
    {
        $this->RetargetingAdjustments = $value;

        return $this;
    }

    /**
     * Get RegionalAdjustments
     *
     * @return list<RegionalAdjustmentAdd>
     */
    public function getRegionalAdjustments(): array
    {
        return $this->RegionalAdjustments ?? [];
    }

    /**
     * Set RegionalAdjustments
     *
     * @param list<RegionalAdjustmentAdd> $value
     *
     * @return $this
     */
    public function setRegionalAdjustments(array $value)
    {
        $this->RegionalAdjustments = $value;

        return $this;
    }

    /**
     * Get VideoAdjustment
     */
    public function getVideoAdjustment(): ?VideoAdjustmentAdd
    {
        return $this->VideoAdjustment ?? null;
    }

    /**
     * Set VideoAdjustment
     *
     * @return $this
     */
    public function setVideoAdjustment(?VideoAdjustmentAdd $value)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }

    /**
     * Get SmartAdAdjustment
     */
    public function getSmartAdAdjustment(): ?SmartAdAdjustmentAdd
    {
        return $this->SmartAdAdjustment ?? null;
    }

    /**
     * Set SmartAdAdjustment
     *
     * @return $this
     */
    public function setSmartAdAdjustment(?SmartAdAdjustmentAdd $value)
    {
        $this->SmartAdAdjustment = $value;

        return $this;
    }

    /**
     * Get SerpLayoutAdjustments
     *
     * @return list<SerpLayoutAdjustmentAdd>
     */
    public function getSerpLayoutAdjustments(): array
    {
        return $this->SerpLayoutAdjustments ?? [];
    }

    /**
     * Set SerpLayoutAdjustments
     *
     * @param list<SerpLayoutAdjustmentAdd> $value
     *
     * @return $this
     */
    public function setSerpLayoutAdjustments(array $value)
    {
        $this->SerpLayoutAdjustments = $value;

        return $this;
    }

    /**
     * Get IncomeGradeAdjustments
     *
     * @return list<IncomeGradeAdjustmentAdd>
     */
    public function getIncomeGradeAdjustments(): array
    {
        return $this->IncomeGradeAdjustments ?? [];
    }

    /**
     * Set IncomeGradeAdjustments
     *
     * @param list<IncomeGradeAdjustmentAdd> $value
     *
     * @return $this
     */
    public function setIncomeGradeAdjustments(array $value)
    {
        $this->IncomeGradeAdjustments = $value;

        return $this;
    }

    /**
     * Get AdGroupAdjustment
     */
    public function getAdGroupAdjustment(): ?AdGroupAdjustmentAdd
    {
        return $this->AdGroupAdjustment ?? null;
    }

    /**
     * Set AdGroupAdjustment
     *
     * @return $this
     */
    public function setAdGroupAdjustment(?AdGroupAdjustmentAdd $value)
    {
        $this->AdGroupAdjustment = $value;

        return $this;
    }
}
