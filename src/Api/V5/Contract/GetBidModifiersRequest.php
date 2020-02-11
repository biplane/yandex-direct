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
     * @return $this
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
     * @return $this
     * @see MobileAdjustmentFieldEnum
     */
    public function setMobileAdjustmentFieldNames(array $value = null)
    {
        $this->MobileAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets DesktopAdjustmentFieldNames.
     *
     * @return string[]|null
     * @see DesktopAdjustmentFieldEnum
     */
    public function getDesktopAdjustmentFieldNames()
    {
        return isset($this->DesktopAdjustmentFieldNames) ? $this->DesktopAdjustmentFieldNames : null;
    }

    /**
     * Sets DesktopAdjustmentFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see DesktopAdjustmentFieldEnum
     */
    public function setDesktopAdjustmentFieldNames(array $value = null)
    {
        $this->DesktopAdjustmentFieldNames = $value;

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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     * @see VideoAdjustmentFieldEnum
     */
    public function setVideoAdjustmentFieldNames(array $value = null)
    {
        $this->VideoAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets SmartAdAdjustmentFieldNames.
     *
     * @return string[]|null
     * @see SmartAdAdjustmentFieldEnum
     */
    public function getSmartAdAdjustmentFieldNames()
    {
        return isset($this->SmartAdAdjustmentFieldNames) ? $this->SmartAdAdjustmentFieldNames : null;
    }

    /**
     * Sets SmartAdAdjustmentFieldNames.
     *
     * @param string[]|null $value
     * @return $this
     * @see SmartAdAdjustmentFieldEnum
     */
    public function setSmartAdAdjustmentFieldNames(array $value = null)
    {
        $this->SmartAdAdjustmentFieldNames = $value;

        return $this;
    }


}

