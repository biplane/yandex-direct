<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidModifiersRequest extends GetRequestGeneral
{

    protected $SelectionCriteria = null;

    protected $FieldNames = array(
        
    );

    protected $MobileAdjustmentFieldNames = null;

    protected $DemographicsAdjustmentFieldNames = null;

    protected $RetargetingAdjustmentFieldNames = null;

    /**
     * Creates a new instance of GetBidModifiersRequest.
     *
     * @return GetBidModifiersRequest
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
     * @return BidModifierFieldEnum[]
     */
    public function getFieldNames()
    {
        return $this->FieldNames;
    }

    /**
     * Sets FieldNames.
     *
     * @param BidModifierFieldEnum[] $value
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
     * @return MobileAdjustmentFieldEnum[]|null
     */
    public function getMobileAdjustmentFieldNames()
    {
        return $this->MobileAdjustmentFieldNames;
    }

    /**
     * Sets MobileAdjustmentFieldNames.
     *
     * @param MobileAdjustmentFieldEnum[]|null $value
     * @return $this
     */
    public function setMobileAdjustmentFieldNames(array $value = null)
    {
        $this->MobileAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets DemographicsAdjustmentFieldNames.
     *
     * @return DemographicsAdjustmentFieldEnum[]|null
     */
    public function getDemographicsAdjustmentFieldNames()
    {
        return $this->DemographicsAdjustmentFieldNames;
    }

    /**
     * Sets DemographicsAdjustmentFieldNames.
     *
     * @param DemographicsAdjustmentFieldEnum[]|null $value
     * @return $this
     */
    public function setDemographicsAdjustmentFieldNames(array $value = null)
    {
        $this->DemographicsAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Gets RetargetingAdjustmentFieldNames.
     *
     * @return RetargetingAdjustmentFieldEnum[]|null
     */
    public function getRetargetingAdjustmentFieldNames()
    {
        return $this->RetargetingAdjustmentFieldNames;
    }

    /**
     * Sets RetargetingAdjustmentFieldNames.
     *
     * @param RetargetingAdjustmentFieldEnum[]|null $value
     * @return $this
     */
    public function setRetargetingAdjustmentFieldNames(array $value = null)
    {
        $this->RetargetingAdjustmentFieldNames = $value;

        return $this;
    }


}

