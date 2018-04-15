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

    protected $RegionalAdjustment = null;

    protected $VideoAdjustment = null;

    /**
     * Creates a new instance of BidModifierGetItem.
     *
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Level.
     *
     * @return string|null
     * @see BidModifierLevelEnum
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * Sets Level.
     *
     * @param string|null $value
     * @return self
     * @see BidModifierLevelEnum
     */
    public function setLevel($value = null)
    {
        $this->Level = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string|null
     * @see BidModifierTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return self
     * @see BidModifierTypeEnum
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setRetargetingAdjustment(RetargetingAdjustmentGet $value = null)
    {
        $this->RetargetingAdjustment = $value;

        return $this;
    }

    /**
     * Gets RegionalAdjustment.
     *
     * @return RegionalAdjustmentGet|null
     */
    public function getRegionalAdjustment()
    {
        return $this->RegionalAdjustment;
    }

    /**
     * Sets RegionalAdjustment.
     *
     * @param RegionalAdjustmentGet|null $value
     * @return self
     */
    public function setRegionalAdjustment(RegionalAdjustmentGet $value = null)
    {
        $this->RegionalAdjustment = $value;

        return $this;
    }

    /**
     * Gets VideoAdjustment.
     *
     * @return VideoAdjustmentGet|null
     */
    public function getVideoAdjustment()
    {
        return $this->VideoAdjustment;
    }

    /**
     * Sets VideoAdjustment.
     *
     * @param VideoAdjustmentGet|null $value
     * @return self
     */
    public function setVideoAdjustment(VideoAdjustmentGet $value = null)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }


}

