<?php

declare(strict_types=1);

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

//    Can be omit.
//    protected $SmartAdAdjustment = null;

    /**
     * Creates a new instance of BidModifierAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets MobileAdjustment.
     */
    public function getMobileAdjustment(): ?MobileAdjustmentAdd
    {
        return $this->MobileAdjustment ?? null;
    }

    /**
     * Sets MobileAdjustment.
     *
     * @return $this
     */
    public function setMobileAdjustment(?MobileAdjustmentAdd $value = null)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    /**
     * Gets DesktopAdjustment.
     */
    public function getDesktopAdjustment(): ?DesktopAdjustmentAdd
    {
        return $this->DesktopAdjustment ?? null;
    }

    /**
     * Sets DesktopAdjustment.
     *
     * @return $this
     */
    public function setDesktopAdjustment(?DesktopAdjustmentAdd $value = null)
    {
        $this->DesktopAdjustment = $value;

        return $this;
    }

    /**
     * Gets DemographicsAdjustments.
     *
     * @return DemographicsAdjustmentAdd[]|null
     */
    public function getDemographicsAdjustments(): ?array
    {
        return $this->DemographicsAdjustments ?? null;
    }

    /**
     * Sets DemographicsAdjustments.
     *
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
     * Gets RetargetingAdjustments.
     *
     * @return RetargetingAdjustmentAdd[]|null
     */
    public function getRetargetingAdjustments(): ?array
    {
        return $this->RetargetingAdjustments ?? null;
    }

    /**
     * Sets RetargetingAdjustments.
     *
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
     * Gets RegionalAdjustments.
     *
     * @return RegionalAdjustmentAdd[]|null
     */
    public function getRegionalAdjustments(): ?array
    {
        return $this->RegionalAdjustments ?? null;
    }

    /**
     * Sets RegionalAdjustments.
     *
     * @param RegionalAdjustmentAdd[]|null $value
     *
     * @return $this
     */
    public function setRegionalAdjustments(?array $value = null)
    {
        $this->RegionalAdjustments = $value;

        return $this;
    }

    /**
     * Gets VideoAdjustment.
     */
    public function getVideoAdjustment(): ?VideoAdjustmentAdd
    {
        return $this->VideoAdjustment ?? null;
    }

    /**
     * Sets VideoAdjustment.
     *
     * @return $this
     */
    public function setVideoAdjustment(?VideoAdjustmentAdd $value = null)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }

    /**
     * Gets SmartAdAdjustment.
     */
    public function getSmartAdAdjustment(): ?SmartAdAdjustmentAdd
    {
        return $this->SmartAdAdjustment ?? null;
    }

    /**
     * Sets SmartAdAdjustment.
     *
     * @return $this
     */
    public function setSmartAdAdjustment(?SmartAdAdjustmentAdd $value = null)
    {
        $this->SmartAdAdjustment = $value;

        return $this;
    }
}
