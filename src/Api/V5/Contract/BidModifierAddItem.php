<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifierAddItem extends BidModifierAddBase
{

//    Can be omit.
//    protected $MobileAdjustment = null;

//    Can be omit.
//    protected $DesktopAdjustment = null;

//    Can be omit.
//    protected $DemographicsAdjustments = null;

//    Can be omit.
//    protected $RetargetingAdjustments = null;

//    Can be omit.
//    protected $RegionalAdjustments = null;

//    Can be omit.
//    protected $VideoAdjustment = null;

    /**
     * Creates a new instance of BidModifierAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets MobileAdjustment.
     *
     * @return MobileAdjustmentAdd|null
     */
    public function getMobileAdjustment()
    {
        return isset($this->MobileAdjustment) ? $this->MobileAdjustment : null;
    }

    /**
     * Sets MobileAdjustment.
     *
     * @param MobileAdjustmentAdd|null $value
     * @return $this
     */
    public function setMobileAdjustment(MobileAdjustmentAdd $value = null)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    /**
     * Gets DesktopAdjustment.
     *
     * @return DesktopAdjustmentAdd|null
     */
    public function getDesktopAdjustment()
    {
        return isset($this->DesktopAdjustment) ? $this->DesktopAdjustment : null;
    }

    /**
     * Sets DesktopAdjustment.
     *
     * @param DesktopAdjustmentAdd|null $value
     * @return $this
     */
    public function setDesktopAdjustment(DesktopAdjustmentAdd $value = null)
    {
        $this->DesktopAdjustment = $value;

        return $this;
    }

    /**
     * Gets DemographicsAdjustments.
     *
     * @return DemographicsAdjustmentAdd[]|null
     */
    public function getDemographicsAdjustments()
    {
        return isset($this->DemographicsAdjustments) ? $this->DemographicsAdjustments : null;
    }

    /**
     * Sets DemographicsAdjustments.
     *
     * @param DemographicsAdjustmentAdd[]|null $value
     * @return $this
     */
    public function setDemographicsAdjustments(array $value = null)
    {
        $this->DemographicsAdjustments = $value;

        return $this;
    }

    /**
     * Gets RetargetingAdjustments.
     *
     * @return RetargetingAdjustmentAdd[]|null
     */
    public function getRetargetingAdjustments()
    {
        return isset($this->RetargetingAdjustments) ? $this->RetargetingAdjustments : null;
    }

    /**
     * Sets RetargetingAdjustments.
     *
     * @param RetargetingAdjustmentAdd[]|null $value
     * @return $this
     */
    public function setRetargetingAdjustments(array $value = null)
    {
        $this->RetargetingAdjustments = $value;

        return $this;
    }

    /**
     * Gets RegionalAdjustments.
     *
     * @return RegionalAdjustmentAdd[]|null
     */
    public function getRegionalAdjustments()
    {
        return isset($this->RegionalAdjustments) ? $this->RegionalAdjustments : null;
    }

    /**
     * Sets RegionalAdjustments.
     *
     * @param RegionalAdjustmentAdd[]|null $value
     * @return $this
     */
    public function setRegionalAdjustments(array $value = null)
    {
        $this->RegionalAdjustments = $value;

        return $this;
    }

    /**
     * Gets VideoAdjustment.
     *
     * @return VideoAdjustmentAdd|null
     */
    public function getVideoAdjustment()
    {
        return isset($this->VideoAdjustment) ? $this->VideoAdjustment : null;
    }

    /**
     * Sets VideoAdjustment.
     *
     * @param VideoAdjustmentAdd|null $value
     * @return $this
     */
    public function setVideoAdjustment(VideoAdjustmentAdd $value = null)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }


}

