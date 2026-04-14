<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BidModifierGetItem
{
//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $AdGroupId;

//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $Level;

//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $MobileAdjustment;

//    Can be omitted.
//    protected $DesktopAdjustment;

//    Can be omitted.
//    protected $SmartTvAdjustment;

//    Can be omitted.
//    protected $TabletAdjustment;

//    Can be omitted.
//    protected $DesktopOnlyAdjustment;

//    Can be omitted.
//    protected $DemographicsAdjustment;

//    Can be omitted.
//    protected $RetargetingAdjustment;

//    Can be omitted.
//    protected $RegionalAdjustment;

//    Can be omitted.
//    protected $VideoAdjustment;

//    Can be omitted.
//    protected $SmartAdAdjustment;

//    Can be omitted.
//    protected $SerpLayoutAdjustment;

//    Can be omitted.
//    protected $IncomeGradeAdjustment;

//    Can be omitted.
//    protected $AdGroupAdjustment;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get CampaignId
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Set CampaignId
     *
     * @return $this
     */
    public function setCampaignId(?int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Get AdGroupId
     */
    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * Set AdGroupId
     *
     * @return $this
     */
    public function setAdGroupId(?int $value)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Level
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierLevelEnum
     *
     * @return 'CAMPAIGN'|'AD_GROUP'|null
     */
    public function getLevel(): ?string
    {
        return $this->Level ?? null;
    }

    /**
     * Set Level
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierLevelEnum
     *
     * @param 'CAMPAIGN'|'AD_GROUP'|null $value
     *
     * @return $this
     */
    public function setLevel(?string $value)
    {
        $this->Level = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierTypeEnum
     *
     * @return 'MOBILE_ADJUSTMENT'|'DESKTOP_ADJUSTMENT'|'SMART_TV_ADJUSTMENT'|'TABLET_ADJUSTMENT'|'DESKTOP_ONLY_ADJUSTMENT'|'DEMOGRAPHICS_ADJUSTMENT'|'RETARGETING_ADJUSTMENT'|'REGIONAL_ADJUSTMENT'|'VIDEO_ADJUSTMENT'|'SMART_AD_ADJUSTMENT'|'SERP_LAYOUT_ADJUSTMENT'|'INCOME_GRADE_ADJUSTMENT'|'AD_GROUP_ADJUSTMENT'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierTypeEnum
     *
     * @param 'MOBILE_ADJUSTMENT'|'DESKTOP_ADJUSTMENT'|'SMART_TV_ADJUSTMENT'|'TABLET_ADJUSTMENT'|'DESKTOP_ONLY_ADJUSTMENT'|'DEMOGRAPHICS_ADJUSTMENT'|'RETARGETING_ADJUSTMENT'|'REGIONAL_ADJUSTMENT'|'VIDEO_ADJUSTMENT'|'SMART_AD_ADJUSTMENT'|'SERP_LAYOUT_ADJUSTMENT'|'INCOME_GRADE_ADJUSTMENT'|'AD_GROUP_ADJUSTMENT'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get MobileAdjustment
     */
    public function getMobileAdjustment(): ?MobileAdjustmentGet
    {
        return $this->MobileAdjustment ?? null;
    }

    /**
     * Set MobileAdjustment
     *
     * @return $this
     */
    public function setMobileAdjustment(?MobileAdjustmentGet $value)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    /**
     * Get DesktopAdjustment
     */
    public function getDesktopAdjustment(): ?DesktopAdjustmentGet
    {
        return $this->DesktopAdjustment ?? null;
    }

    /**
     * Set DesktopAdjustment
     *
     * @return $this
     */
    public function setDesktopAdjustment(?DesktopAdjustmentGet $value)
    {
        $this->DesktopAdjustment = $value;

        return $this;
    }

    /**
     * Get SmartTvAdjustment
     */
    public function getSmartTvAdjustment(): ?SmartTvAdjustmentGet
    {
        return $this->SmartTvAdjustment ?? null;
    }

    /**
     * Set SmartTvAdjustment
     *
     * @return $this
     */
    public function setSmartTvAdjustment(?SmartTvAdjustmentGet $value)
    {
        $this->SmartTvAdjustment = $value;

        return $this;
    }

    /**
     * Get TabletAdjustment
     */
    public function getTabletAdjustment(): ?TabletAdjustmentGet
    {
        return $this->TabletAdjustment ?? null;
    }

    /**
     * Set TabletAdjustment
     *
     * @return $this
     */
    public function setTabletAdjustment(?TabletAdjustmentGet $value)
    {
        $this->TabletAdjustment = $value;

        return $this;
    }

    /**
     * Get DesktopOnlyAdjustment
     */
    public function getDesktopOnlyAdjustment(): ?DesktopOnlyAdjustmentGet
    {
        return $this->DesktopOnlyAdjustment ?? null;
    }

    /**
     * Set DesktopOnlyAdjustment
     *
     * @return $this
     */
    public function setDesktopOnlyAdjustment(?DesktopOnlyAdjustmentGet $value)
    {
        $this->DesktopOnlyAdjustment = $value;

        return $this;
    }

    /**
     * Get DemographicsAdjustment
     */
    public function getDemographicsAdjustment(): ?DemographicsAdjustmentGet
    {
        return $this->DemographicsAdjustment ?? null;
    }

    /**
     * Set DemographicsAdjustment
     *
     * @return $this
     */
    public function setDemographicsAdjustment(?DemographicsAdjustmentGet $value)
    {
        $this->DemographicsAdjustment = $value;

        return $this;
    }

    /**
     * Get RetargetingAdjustment
     */
    public function getRetargetingAdjustment(): ?RetargetingAdjustmentGet
    {
        return $this->RetargetingAdjustment ?? null;
    }

    /**
     * Set RetargetingAdjustment
     *
     * @return $this
     */
    public function setRetargetingAdjustment(?RetargetingAdjustmentGet $value)
    {
        $this->RetargetingAdjustment = $value;

        return $this;
    }

    /**
     * Get RegionalAdjustment
     */
    public function getRegionalAdjustment(): ?RegionalAdjustmentGet
    {
        return $this->RegionalAdjustment ?? null;
    }

    /**
     * Set RegionalAdjustment
     *
     * @return $this
     */
    public function setRegionalAdjustment(?RegionalAdjustmentGet $value)
    {
        $this->RegionalAdjustment = $value;

        return $this;
    }

    /**
     * Get VideoAdjustment
     */
    public function getVideoAdjustment(): ?VideoAdjustmentGet
    {
        return $this->VideoAdjustment ?? null;
    }

    /**
     * Set VideoAdjustment
     *
     * @return $this
     */
    public function setVideoAdjustment(?VideoAdjustmentGet $value)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }

    /**
     * Get SmartAdAdjustment
     */
    public function getSmartAdAdjustment(): ?SmartAdAdjustmentGet
    {
        return $this->SmartAdAdjustment ?? null;
    }

    /**
     * Set SmartAdAdjustment
     *
     * @return $this
     */
    public function setSmartAdAdjustment(?SmartAdAdjustmentGet $value)
    {
        $this->SmartAdAdjustment = $value;

        return $this;
    }

    /**
     * Get SerpLayoutAdjustment
     */
    public function getSerpLayoutAdjustment(): ?SerpLayoutAdjustmentGet
    {
        return $this->SerpLayoutAdjustment ?? null;
    }

    /**
     * Set SerpLayoutAdjustment
     *
     * @return $this
     */
    public function setSerpLayoutAdjustment(?SerpLayoutAdjustmentGet $value)
    {
        $this->SerpLayoutAdjustment = $value;

        return $this;
    }

    /**
     * Get IncomeGradeAdjustment
     */
    public function getIncomeGradeAdjustment(): ?IncomeGradeAdjustmentGet
    {
        return $this->IncomeGradeAdjustment ?? null;
    }

    /**
     * Set IncomeGradeAdjustment
     *
     * @return $this
     */
    public function setIncomeGradeAdjustment(?IncomeGradeAdjustmentGet $value)
    {
        $this->IncomeGradeAdjustment = $value;

        return $this;
    }

    /**
     * Get AdGroupAdjustment
     */
    public function getAdGroupAdjustment(): ?AdGroupAdjustmentGet
    {
        return $this->AdGroupAdjustment ?? null;
    }

    /**
     * Set AdGroupAdjustment
     *
     * @return $this
     */
    public function setAdGroupAdjustment(?AdGroupAdjustmentGet $value)
    {
        $this->AdGroupAdjustment = $value;

        return $this;
    }
}
