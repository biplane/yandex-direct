<?php

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
//    protected $DemographicsAdjustmentFieldNames = null;

//    Can be omit.
//    protected $RetargetingAdjustmentFieldNames = null;

//    Can be omit.
//    protected $RegionalAdjustmentFieldNames = null;

//    Can be omit.
//    protected $VideoAdjustmentFieldNames = null;

    /**
     * Creates a new instance of GetBidModifiersRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return BidModifiersSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param BidModifiersSelectionCriteria $value
     * @return self
     */
    public function setSelectionCriteria(BidModifiersSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets FieldNames.
     *
     * @return string[]
     * @see BidModifierFieldEnum
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param string[] $value
     * @return self
     * @see BidModifierFieldEnum
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Gets MobileAdjustmentFieldNames.
     *
     * @return string[]|null
     * @see MobileAdjustmentFieldEnum
     */
    public function getMobileAdjustmentFieldNames()
    {
        return isset($this->MobileAdjustmentFieldNames) ? $this->MobileAdjustmentFieldNames : null;
    }

    /**
     * Sets MobileAdjustmentFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see MobileAdjustmentFieldEnum
     */
    public function setMobileAdjustmentFieldNames(array $value = null)
    {
        $this->MobileAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets DemographicsAdjustmentFieldNames.
     *
     * @return string[]|null
     * @see DemographicsAdjustmentFieldEnum
     */
    public function getDemographicsAdjustmentFieldNames()
    {
        return isset($this->DemographicsAdjustmentFieldNames) ? $this->DemographicsAdjustmentFieldNames : null;
    }

    /**
     * Sets DemographicsAdjustmentFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see DemographicsAdjustmentFieldEnum
     */
    public function setDemographicsAdjustmentFieldNames(array $value = null)
    {
        $this->DemographicsAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets RetargetingAdjustmentFieldNames.
     *
     * @return string[]|null
     * @see RetargetingAdjustmentFieldEnum
     */
    public function getRetargetingAdjustmentFieldNames()
    {
        return isset($this->RetargetingAdjustmentFieldNames) ? $this->RetargetingAdjustmentFieldNames : null;
    }

    /**
     * Sets RetargetingAdjustmentFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see RetargetingAdjustmentFieldEnum
     */
    public function setRetargetingAdjustmentFieldNames(array $value = null)
    {
        $this->RetargetingAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets RegionalAdjustmentFieldNames.
     *
     * @return string[]|null
     * @see RegionalAdjustmentFieldEnum
     */
    public function getRegionalAdjustmentFieldNames()
    {
        return isset($this->RegionalAdjustmentFieldNames) ? $this->RegionalAdjustmentFieldNames : null;
    }

    /**
     * Sets RegionalAdjustmentFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see RegionalAdjustmentFieldEnum
     */
    public function setRegionalAdjustmentFieldNames(array $value = null)
    {
        $this->RegionalAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets VideoAdjustmentFieldNames.
     *
     * @return string[]|null
     * @see VideoAdjustmentFieldEnum
     */
    public function getVideoAdjustmentFieldNames()
    {
        return isset($this->VideoAdjustmentFieldNames) ? $this->VideoAdjustmentFieldNames : null;
    }

    /**
     * Sets VideoAdjustmentFieldNames.
     *
     * @param string[]|null $value
     * @return self
     * @see VideoAdjustmentFieldEnum
     */
    public function setVideoAdjustmentFieldNames(array $value = null)
    {
        $this->VideoAdjustmentFieldNames = $value;

        return $this;
    }


}

