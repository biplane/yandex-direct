<?php

declare(strict_types=1);

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
//    protected $DesktopAdjustment = null;

//    Can be omit.
//    protected $DemographicsAdjustment = null;

//    Can be omit.
//    protected $RetargetingAdjustment = null;

//    Can be omit.
//    protected $RegionalAdjustment = null;

//    Can be omit.
//    protected $VideoAdjustment = null;

//    Can be omit.
//    protected $SmartAdAdjustment = null;

    /**
     * Creates a new instance of BidModifierGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CampaignId.
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Sets CampaignId.
     *
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Sets AdGroupId.
     *
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Id.
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Level.
     *
     * @see BidModifierLevelEnum
     */
    public function getLevel(): ?string
    {
        return $this->Level ?? null;
    }

    /**
     * Sets Level.
     *
     * @see BidModifierLevelEnum
     *
     * @return $this
     */
    public function setLevel(?string $value = null)
    {
        $this->Level = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @see BidModifierTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Sets Type.
     *
     * @see BidModifierTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets MobileAdjustment.
     */
    public function getMobileAdjustment(): ?MobileAdjustmentGet
    {
        return $this->MobileAdjustment ?? null;
    }

    /**
     * Sets MobileAdjustment.
     *
     * @return $this
     */
    public function setMobileAdjustment(?MobileAdjustmentGet $value = null)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    /**
     * Gets DesktopAdjustment.
     */
    public function getDesktopAdjustment(): ?DesktopAdjustmentGet
    {
        return $this->DesktopAdjustment ?? null;
    }

    /**
     * Sets DesktopAdjustment.
     *
     * @return $this
     */
    public function setDesktopAdjustment(?DesktopAdjustmentGet $value = null)
    {
        $this->DesktopAdjustment = $value;

        return $this;
    }

    /**
     * Gets DemographicsAdjustment.
     */
    public function getDemographicsAdjustment(): ?DemographicsAdjustmentGet
    {
        return $this->DemographicsAdjustment ?? null;
    }

    /**
     * Sets DemographicsAdjustment.
     *
     * @return $this
     */
    public function setDemographicsAdjustment(?DemographicsAdjustmentGet $value = null)
    {
        $this->DemographicsAdjustment = $value;

        return $this;
    }

    /**
     * Gets RetargetingAdjustment.
     */
    public function getRetargetingAdjustment(): ?RetargetingAdjustmentGet
    {
        return $this->RetargetingAdjustment ?? null;
    }

    /**
     * Sets RetargetingAdjustment.
     *
     * @return $this
     */
    public function setRetargetingAdjustment(?RetargetingAdjustmentGet $value = null)
    {
        $this->RetargetingAdjustment = $value;

        return $this;
    }

    /**
     * Gets RegionalAdjustment.
     */
    public function getRegionalAdjustment(): ?RegionalAdjustmentGet
    {
        return $this->RegionalAdjustment ?? null;
    }

    /**
     * Sets RegionalAdjustment.
     *
     * @return $this
     */
    public function setRegionalAdjustment(?RegionalAdjustmentGet $value = null)
    {
        $this->RegionalAdjustment = $value;

        return $this;
    }

    /**
     * Gets VideoAdjustment.
     */
    public function getVideoAdjustment(): ?VideoAdjustmentGet
    {
        return $this->VideoAdjustment ?? null;
    }

    /**
     * Sets VideoAdjustment.
     *
     * @return $this
     */
    public function setVideoAdjustment(?VideoAdjustmentGet $value = null)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }

    /**
     * Gets SmartAdAdjustment.
     */
    public function getSmartAdAdjustment(): ?SmartAdAdjustmentGet
    {
        return $this->SmartAdAdjustment ?? null;
    }

    /**
     * Sets SmartAdAdjustment.
     *
     * @return $this
     */
    public function setSmartAdAdjustment(?SmartAdAdjustmentGet $value = null)
    {
        $this->SmartAdAdjustment = $value;

        return $this;
    }
}
