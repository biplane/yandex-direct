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
//    protected $DemographicsAdjustments = null;

//    Can be omitted.
//    protected $RetargetingAdjustments = null;

//    Can be omitted.
//    protected $RegionalAdjustments = null;

//    Can be omitted.
//    protected $VideoAdjustment = null;

//    Can be omitted.
//    protected $SmartAdAdjustment = null;

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
}
