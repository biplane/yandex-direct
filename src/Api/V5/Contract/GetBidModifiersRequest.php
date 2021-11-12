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

//    Can be omitted.
//    protected $MobileAdjustmentFieldNames = null;

//    Can be omitted.
//    protected $DesktopAdjustmentFieldNames = null;

//    Can be omitted.
//    protected $DemographicsAdjustmentFieldNames = null;

//    Can be omitted.
//    protected $RetargetingAdjustmentFieldNames = null;

//    Can be omitted.
//    protected $RegionalAdjustmentFieldNames = null;

//    Can be omitted.
//    protected $VideoAdjustmentFieldNames = null;

//    Can be omitted.
//    protected $SmartAdAdjustmentFieldNames = null;

//    Can be omitted.
//    protected $SerpLayoutAdjustmentFieldNames = null;

//    Can be omitted.
//    protected $IncomeGradeAdjustmentFieldNames = null;

    public function getSelectionCriteria(): BidModifiersSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(BidModifiersSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @see BidModifierFieldEnum
     *
     * @return string[]
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
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
     * @see MobileAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getMobileAdjustmentFieldNames(): ?array
    {
        return $this->MobileAdjustmentFieldNames ?? null;
    }

    /**
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
     * @see DesktopAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getDesktopAdjustmentFieldNames(): ?array
    {
        return $this->DesktopAdjustmentFieldNames ?? null;
    }

    /**
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
     * @see DemographicsAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getDemographicsAdjustmentFieldNames(): ?array
    {
        return $this->DemographicsAdjustmentFieldNames ?? null;
    }

    /**
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
     * @see RetargetingAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getRetargetingAdjustmentFieldNames(): ?array
    {
        return $this->RetargetingAdjustmentFieldNames ?? null;
    }

    /**
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
     * @see RegionalAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getRegionalAdjustmentFieldNames(): ?array
    {
        return $this->RegionalAdjustmentFieldNames ?? null;
    }

    /**
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
     * @see VideoAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getVideoAdjustmentFieldNames(): ?array
    {
        return $this->VideoAdjustmentFieldNames ?? null;
    }

    /**
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
     * @see SmartAdAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getSmartAdAdjustmentFieldNames(): ?array
    {
        return $this->SmartAdAdjustmentFieldNames ?? null;
    }

    /**
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

    /**
     * @see SerpLayoutAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getSerpLayoutAdjustmentFieldNames(): ?array
    {
        return $this->SerpLayoutAdjustmentFieldNames ?? null;
    }

    /**
     * @see SerpLayoutAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSerpLayoutAdjustmentFieldNames(?array $value = null)
    {
        $this->SerpLayoutAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * @see IncomeGradeAdjustmentFieldEnum
     *
     * @return string[]|null
     */
    public function getIncomeGradeAdjustmentFieldNames(): ?array
    {
        return $this->IncomeGradeAdjustmentFieldNames ?? null;
    }

    /**
     * @see IncomeGradeAdjustmentFieldEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setIncomeGradeAdjustmentFieldNames(?array $value = null)
    {
        $this->IncomeGradeAdjustmentFieldNames = $value;

        return $this;
    }
}
