<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifierGetItem
{

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Level = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $MobileAdjustment = null;

//    Can be omit.
//    protected $DemographicsAdjustment = null;

//    Can be omit.
//    protected $RetargetingAdjustment = null;

//    Can be omit.
//    protected $RegionalAdjustment = null;

//    Can be omit.
//    protected $VideoAdjustment = null;

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
        return isset($this->CampaignId) ? $this->CampaignId : null;
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
        return isset($this->AdGroupId) ? $this->AdGroupId : null;
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
        return isset($this->Id) ? $this->Id : null;
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
     * @return string|null
     * @see BidModifierLevelEnum
     */
    public function getLevel()
    {
        return isset($this->Level) ? $this->Level : null;
    }

    /**
     * Sets Level.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Type) ? $this->Type : null;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->MobileAdjustment) ? $this->MobileAdjustment : null;
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
        return isset($this->DemographicsAdjustment) ? $this->DemographicsAdjustment : null;
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
        return isset($this->RetargetingAdjustment) ? $this->RetargetingAdjustment : null;
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

    /**
     * Gets RegionalAdjustment.
     *
     * @return RegionalAdjustmentGet|null
     */
    public function getRegionalAdjustment()
    {
        return isset($this->RegionalAdjustment) ? $this->RegionalAdjustment : null;
    }

    /**
     * Sets RegionalAdjustment.
     *
     * @param RegionalAdjustmentGet|null $value
     * @return $this
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
        return isset($this->VideoAdjustment) ? $this->VideoAdjustment : null;
    }

    /**
     * Sets VideoAdjustment.
     *
     * @param VideoAdjustmentGet|null $value
     * @return $this
     */
    public function setVideoAdjustment(VideoAdjustmentGet $value = null)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }


}

