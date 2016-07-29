<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifierGetItem
{

    protected $CampaignId = null;

    protected $AdGroupId = null;

    protected $Id = null;

    protected $Level = null;

    protected $Type = null;

    protected $MobileAdjustment = null;

    protected $DemographicsAdjustment = null;

    protected $RetargetingAdjustment = null;

    /**
     * Creates a new instance of BidModifierGetItem.
     *
     * @return BidModifierGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Level.
     *
     * @return BidModifierLevelEnum|null
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Sets Level.
     *
     * @param BidModifierLevelEnum|null $value
     * @return $this
     */
    public function setLevel($value = null)
    {
        $this->Level = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return BidModifierTypeEnum|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param BidModifierTypeEnum|null $value
     * @return $this
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets MobileAdjustment.
     *
     * @return MobileAdjustmentGet|null
     */
    public function getMobileAdjustment()
    {
        return $this->MobileAdjustment;
    }

    /**
     * Sets MobileAdjustment.
     *
     * @param MobileAdjustmentGet|null $value
     * @return $this
     */
    public function setMobileAdjustment(MobileAdjustmentGet $value = null)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    /**
     * Gets DemographicsAdjustment.
     *
     * @return DemographicsAdjustmentGet|null
     */
    public function getDemographicsAdjustment()
    {
        return $this->DemographicsAdjustment;
    }

    /**
     * Sets DemographicsAdjustment.
     *
     * @param DemographicsAdjustmentGet|null $value
     * @return $this
     */
    public function setDemographicsAdjustment(DemographicsAdjustmentGet $value = null)
    {
        $this->DemographicsAdjustment = $value;

        return $this;
    }

    /**
     * Gets RetargetingAdjustment.
     *
     * @return RetargetingAdjustmentGet|null
     */
    public function getRetargetingAdjustment()
    {
        return $this->RetargetingAdjustment;
    }

    /**
     * Sets RetargetingAdjustment.
     *
     * @param RetargetingAdjustmentGet|null $value
     * @return $this
     */
    public function setRetargetingAdjustment(RetargetingAdjustmentGet $value = null)
    {
        $this->RetargetingAdjustment = $value;

        return $this;
    }


}

