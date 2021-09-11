<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidModifiersRequest extends GetRequestGeneral
{
    protected $SelectionCriteria = null;

    protected $FieldNames = [];

//    Can be omit.
//    protected $MobileAdjustmentFieldNames = null;

//    Can be omit.
//    protected $DesktopAdjustmentFieldNames = null;

//    Can be omit.
//    protected $DemographicsAdjustmentFieldNames = null;

//    Can be omit.
//    protected $RetargetingAdjustmentFieldNames = null;

//    Can be omit.
//    protected $RegionalAdjustmentFieldNames = null;

//    Can be omit.
//    protected $VideoAdjustmentFieldNames = null;

//    Can be omit.
//    protected $SmartAdAdjustmentFieldNames = null;

    /**
     * Creates a new instance of GetBidModifiersRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): BidModifiersSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(BidModifiersSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @see BidModifierFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @see BidModifierFieldEnum
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAdjustmentFieldNames.
     *
     * @see MobileAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAdjustmentFieldNames(): ?array
    {
        return $this->MobileAdjustmentFieldNames ?? null;
    }

    /**
     * Sets MobileAdjustmentFieldNames.
     *
     * @see MobileAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setMobileAdjustmentFieldNames(?array $value = null)
    {
        $this->MobileAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets DesktopAdjustmentFieldNames.
     *
     * @see DesktopAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getDesktopAdjustmentFieldNames(): ?array
    {
        return $this->DesktopAdjustmentFieldNames ?? null;
    }

    /**
     * Sets DesktopAdjustmentFieldNames.
     *
     * @see DesktopAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setDesktopAdjustmentFieldNames(?array $value = null)
    {
        $this->DesktopAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets DemographicsAdjustmentFieldNames.
     *
     * @see DemographicsAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getDemographicsAdjustmentFieldNames(): ?array
    {
        return $this->DemographicsAdjustmentFieldNames ?? null;
    }

    /**
     * Sets DemographicsAdjustmentFieldNames.
     *
     * @see DemographicsAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setDemographicsAdjustmentFieldNames(?array $value = null)
    {
        $this->DemographicsAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets RetargetingAdjustmentFieldNames.
     *
     * @see RetargetingAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getRetargetingAdjustmentFieldNames(): ?array
    {
        return $this->RetargetingAdjustmentFieldNames ?? null;
    }

    /**
     * Sets RetargetingAdjustmentFieldNames.
     *
     * @see RetargetingAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setRetargetingAdjustmentFieldNames(?array $value = null)
    {
        $this->RetargetingAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets RegionalAdjustmentFieldNames.
     *
     * @see RegionalAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getRegionalAdjustmentFieldNames(): ?array
    {
        return $this->RegionalAdjustmentFieldNames ?? null;
    }

    /**
     * Sets RegionalAdjustmentFieldNames.
     *
     * @see RegionalAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setRegionalAdjustmentFieldNames(?array $value = null)
    {
        $this->RegionalAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets VideoAdjustmentFieldNames.
     *
     * @see VideoAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getVideoAdjustmentFieldNames(): ?array
    {
        return $this->VideoAdjustmentFieldNames ?? null;
    }

    /**
     * Sets VideoAdjustmentFieldNames.
     *
     * @see VideoAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setVideoAdjustmentFieldNames(?array $value = null)
    {
        $this->VideoAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets SmartAdAdjustmentFieldNames.
     *
     * @see SmartAdAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getSmartAdAdjustmentFieldNames(): ?array
    {
        return $this->SmartAdAdjustmentFieldNames ?? null;
    }

    /**
     * Sets SmartAdAdjustmentFieldNames.
     *
     * @see SmartAdAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSmartAdAdjustmentFieldNames(?array $value = null)
    {
        $this->SmartAdAdjustmentFieldNames = $value;

        return $this;
    }
}
