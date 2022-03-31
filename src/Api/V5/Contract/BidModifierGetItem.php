<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class BidModifierGetItem
{
//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $AdGroupId = null;

//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $Level = null;

//    Can be omitted.
//    protected $Type = null;

//    Can be omitted.
//    protected $MobileAdjustment = null;

//    Can be omitted.
//    protected $DesktopAdjustment = null;

//    Can be omitted.
//    protected $TabletAdjustment = null;

//    Can be omitted.
//    protected $DesktopOnlyAdjustment = null;

//    Can be omitted.
//    protected $DemographicsAdjustment = null;

//    Can be omitted.
//    protected $RetargetingAdjustment = null;

//    Can be omitted.
//    protected $RegionalAdjustment = null;

//    Can be omitted.
//    protected $VideoAdjustment = null;

//    Can be omitted.
//    protected $SmartAdAdjustment = null;

//    Can be omitted.
//    protected $SerpLayoutAdjustment = null;

//    Can be omitted.
//    protected $IncomeGradeAdjustment = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    public function getAdGroupId(): ?int
    {
        return $this->AdGroupId ?? null;
    }

    /**
     * @return $this
     */
    public function setAdGroupId(?int $value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * @see BidModifierLevelEnum
     */
    public function getLevel(): ?string
    {
        return $this->Level ?? null;
    }

    /**
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
     * @see BidModifierTypeEnum
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * @see BidModifierTypeEnum
     *
     * @return $this
     */
    public function setType(?string $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    public function getMobileAdjustment(): ?MobileAdjustmentGet
    {
        return $this->MobileAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAdjustment(?MobileAdjustmentGet $value = null)
    {
        $this->MobileAdjustment = $value;

        return $this;
    }

    public function getDesktopAdjustment(): ?DesktopAdjustmentGet
    {
        return $this->DesktopAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setDesktopAdjustment(?DesktopAdjustmentGet $value = null)
    {
        $this->DesktopAdjustment = $value;

        return $this;
    }

    public function getTabletAdjustment(): ?TabletAdjustmentGet
    {
        return $this->TabletAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setTabletAdjustment(?TabletAdjustmentGet $value = null)
    {
        $this->TabletAdjustment = $value;

        return $this;
    }

    public function getDesktopOnlyAdjustment(): ?DesktopOnlyAdjustmentGet
    {
        return $this->DesktopOnlyAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setDesktopOnlyAdjustment(?DesktopOnlyAdjustmentGet $value = null)
    {
        $this->DesktopOnlyAdjustment = $value;

        return $this;
    }

    public function getDemographicsAdjustment(): ?DemographicsAdjustmentGet
    {
        return $this->DemographicsAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setDemographicsAdjustment(?DemographicsAdjustmentGet $value = null)
    {
        $this->DemographicsAdjustment = $value;

        return $this;
    }

    public function getRetargetingAdjustment(): ?RetargetingAdjustmentGet
    {
        return $this->RetargetingAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setRetargetingAdjustment(?RetargetingAdjustmentGet $value = null)
    {
        $this->RetargetingAdjustment = $value;

        return $this;
    }

    public function getRegionalAdjustment(): ?RegionalAdjustmentGet
    {
        return $this->RegionalAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setRegionalAdjustment(?RegionalAdjustmentGet $value = null)
    {
        $this->RegionalAdjustment = $value;

        return $this;
    }

    public function getVideoAdjustment(): ?VideoAdjustmentGet
    {
        return $this->VideoAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setVideoAdjustment(?VideoAdjustmentGet $value = null)
    {
        $this->VideoAdjustment = $value;

        return $this;
    }

    public function getSmartAdAdjustment(): ?SmartAdAdjustmentGet
    {
        return $this->SmartAdAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartAdAdjustment(?SmartAdAdjustmentGet $value = null)
    {
        $this->SmartAdAdjustment = $value;

        return $this;
    }

    public function getSerpLayoutAdjustment(): ?SerpLayoutAdjustmentGet
    {
        return $this->SerpLayoutAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setSerpLayoutAdjustment(?SerpLayoutAdjustmentGet $value = null)
    {
        $this->SerpLayoutAdjustment = $value;

        return $this;
    }

    public function getIncomeGradeAdjustment(): ?IncomeGradeAdjustmentGet
    {
        return $this->IncomeGradeAdjustment ?? null;
    }

    /**
     * @return $this
     */
    public function setIncomeGradeAdjustment(?IncomeGradeAdjustmentGet $value = null)
    {
        $this->IncomeGradeAdjustment = $value;

        return $this;
    }
}
