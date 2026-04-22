<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetBidModifiersRequest extends GetRequestGeneral
{
    /** @var BidModifiersSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'CampaignId'|'AdGroupId'|'Level'|'Type'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $MobileAdjustmentFieldNames;

//    Can be omitted.
//    protected $DesktopAdjustmentFieldNames;

//    Can be omitted.
//    protected $SmartTvAdjustmentFieldNames;

//    Can be omitted.
//    protected $TabletAdjustmentFieldNames;

//    Can be omitted.
//    protected $DesktopOnlyAdjustmentFieldNames;

//    Can be omitted.
//    protected $DemographicsAdjustmentFieldNames;

//    Can be omitted.
//    protected $RetargetingAdjustmentFieldNames;

//    Can be omitted.
//    protected $RegionalAdjustmentFieldNames;

//    Can be omitted.
//    protected $VideoAdjustmentFieldNames;

//    Can be omitted.
//    protected $SmartAdAdjustmentFieldNames;

//    Can be omitted.
//    protected $SerpLayoutAdjustmentFieldNames;

//    Can be omitted.
//    protected $IncomeGradeAdjustmentFieldNames;

//    Can be omitted.
//    protected $AdGroupAdjustmentFieldNames;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): BidModifiersSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(BidModifiersSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierFieldEnum
     *
     * @return non-empty-list<'Id'|'CampaignId'|'AdGroupId'|'Level'|'Type'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierFieldEnum
     *
     * @param non-empty-list<'Id'|'CampaignId'|'AdGroupId'|'Level'|'Type'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get MobileAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentFieldEnum
     *
     * @return list<'BidModifier'|'OperatingSystemType'>
     */
    public function getMobileAdjustmentFieldNames(): array
    {
        return $this->MobileAdjustmentFieldNames ?? [];
    }

    /**
     * Set MobileAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentFieldEnum
     *
     * @param list<'BidModifier'|'OperatingSystemType'> $value
     *
     * @return $this
     */
    public function setMobileAdjustmentFieldNames(array $value)
    {
        $this->MobileAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get DesktopAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DesktopAdjustmentFieldEnum
     *
     * @return list<'BidModifier'>
     */
    public function getDesktopAdjustmentFieldNames(): array
    {
        return $this->DesktopAdjustmentFieldNames ?? [];
    }

    /**
     * Set DesktopAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DesktopAdjustmentFieldEnum
     *
     * @param list<'BidModifier'> $value
     *
     * @return $this
     */
    public function setDesktopAdjustmentFieldNames(array $value)
    {
        $this->DesktopAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get SmartTvAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartTvAdjustmentFieldEnum
     *
     * @return list<'BidModifier'>
     */
    public function getSmartTvAdjustmentFieldNames(): array
    {
        return $this->SmartTvAdjustmentFieldNames ?? [];
    }

    /**
     * Set SmartTvAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartTvAdjustmentFieldEnum
     *
     * @param list<'BidModifier'> $value
     *
     * @return $this
     */
    public function setSmartTvAdjustmentFieldNames(array $value)
    {
        $this->SmartTvAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get TabletAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TabletAdjustmentFieldEnum
     *
     * @return list<'BidModifier'|'OperatingSystemType'>
     */
    public function getTabletAdjustmentFieldNames(): array
    {
        return $this->TabletAdjustmentFieldNames ?? [];
    }

    /**
     * Set TabletAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TabletAdjustmentFieldEnum
     *
     * @param list<'BidModifier'|'OperatingSystemType'> $value
     *
     * @return $this
     */
    public function setTabletAdjustmentFieldNames(array $value)
    {
        $this->TabletAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get DesktopOnlyAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DesktopOnlyAdjustmentFieldEnum
     *
     * @return list<'BidModifier'>
     */
    public function getDesktopOnlyAdjustmentFieldNames(): array
    {
        return $this->DesktopOnlyAdjustmentFieldNames ?? [];
    }

    /**
     * Set DesktopOnlyAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DesktopOnlyAdjustmentFieldEnum
     *
     * @param list<'BidModifier'> $value
     *
     * @return $this
     */
    public function setDesktopOnlyAdjustmentFieldNames(array $value)
    {
        $this->DesktopOnlyAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get DemographicsAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentFieldEnum
     *
     * @return list<'Gender'|'Age'|'BidModifier'|'Enabled'>
     */
    public function getDemographicsAdjustmentFieldNames(): array
    {
        return $this->DemographicsAdjustmentFieldNames ?? [];
    }

    /**
     * Set DemographicsAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentFieldEnum
     *
     * @param list<'Gender'|'Age'|'BidModifier'|'Enabled'> $value
     *
     * @return $this
     */
    public function setDemographicsAdjustmentFieldNames(array $value)
    {
        $this->DemographicsAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get RetargetingAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentFieldEnum
     *
     * @return list<'RetargetingConditionId'|'BidModifier'|'Accessible'|'Enabled'>
     */
    public function getRetargetingAdjustmentFieldNames(): array
    {
        return $this->RetargetingAdjustmentFieldNames ?? [];
    }

    /**
     * Set RetargetingAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentFieldEnum
     *
     * @param list<'RetargetingConditionId'|'BidModifier'|'Accessible'|'Enabled'> $value
     *
     * @return $this
     */
    public function setRetargetingAdjustmentFieldNames(array $value)
    {
        $this->RetargetingAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get RegionalAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RegionalAdjustmentFieldEnum
     *
     * @return list<'RegionId'|'BidModifier'|'Enabled'>
     */
    public function getRegionalAdjustmentFieldNames(): array
    {
        return $this->RegionalAdjustmentFieldNames ?? [];
    }

    /**
     * Set RegionalAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\RegionalAdjustmentFieldEnum
     *
     * @param list<'RegionId'|'BidModifier'|'Enabled'> $value
     *
     * @return $this
     */
    public function setRegionalAdjustmentFieldNames(array $value)
    {
        $this->RegionalAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get VideoAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\VideoAdjustmentFieldEnum
     *
     * @return list<'BidModifier'>
     */
    public function getVideoAdjustmentFieldNames(): array
    {
        return $this->VideoAdjustmentFieldNames ?? [];
    }

    /**
     * Set VideoAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\VideoAdjustmentFieldEnum
     *
     * @param list<'BidModifier'> $value
     *
     * @return $this
     */
    public function setVideoAdjustmentFieldNames(array $value)
    {
        $this->VideoAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get SmartAdAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartAdAdjustmentFieldEnum
     *
     * @return list<'BidModifier'>
     */
    public function getSmartAdAdjustmentFieldNames(): array
    {
        return $this->SmartAdAdjustmentFieldNames ?? [];
    }

    /**
     * Set SmartAdAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartAdAdjustmentFieldEnum
     *
     * @param list<'BidModifier'> $value
     *
     * @return $this
     */
    public function setSmartAdAdjustmentFieldNames(array $value)
    {
        $this->SmartAdAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get SerpLayoutAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SerpLayoutAdjustmentFieldEnum
     *
     * @return list<'SerpLayout'|'BidModifier'|'Enabled'>
     */
    public function getSerpLayoutAdjustmentFieldNames(): array
    {
        return $this->SerpLayoutAdjustmentFieldNames ?? [];
    }

    /**
     * Set SerpLayoutAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SerpLayoutAdjustmentFieldEnum
     *
     * @param list<'SerpLayout'|'BidModifier'|'Enabled'> $value
     *
     * @return $this
     */
    public function setSerpLayoutAdjustmentFieldNames(array $value)
    {
        $this->SerpLayoutAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get IncomeGradeAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\IncomeGradeAdjustmentFieldEnum
     *
     * @return list<'Grade'|'BidModifier'|'Enabled'>
     */
    public function getIncomeGradeAdjustmentFieldNames(): array
    {
        return $this->IncomeGradeAdjustmentFieldNames ?? [];
    }

    /**
     * Set IncomeGradeAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\IncomeGradeAdjustmentFieldEnum
     *
     * @param list<'Grade'|'BidModifier'|'Enabled'> $value
     *
     * @return $this
     */
    public function setIncomeGradeAdjustmentFieldNames(array $value)
    {
        $this->IncomeGradeAdjustmentFieldNames = $value;

        return $this;
    }

    /**
     * Get AdGroupAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupAdjustmentFieldEnum
     *
     * @return list<'BidModifier'>
     */
    public function getAdGroupAdjustmentFieldNames(): array
    {
        return $this->AdGroupAdjustmentFieldNames ?? [];
    }

    /**
     * Set AdGroupAdjustmentFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupAdjustmentFieldEnum
     *
     * @param list<'BidModifier'> $value
     *
     * @return $this
     */
    public function setAdGroupAdjustmentFieldNames(array $value)
    {
        $this->AdGroupAdjustmentFieldNames = $value;

        return $this;
    }
}
