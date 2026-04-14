<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class BidModifiersSelectionCriteria
{
//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $AdGroupIds;

//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $Types;

    /** @var non-empty-list<'CAMPAIGN'|'AD_GROUP'> */
    protected $Levels;

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
     * Get CampaignIds
     *
     * @return list<int>
     */
    public function getCampaignIds(): array
    {
        return $this->CampaignIds ?? [];
    }

    /**
     * Set CampaignIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setCampaignIds(array $value)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Get AdGroupIds
     *
     * @return list<int>
     */
    public function getAdGroupIds(): array
    {
        return $this->AdGroupIds ?? [];
    }

    /**
     * Set AdGroupIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setAdGroupIds(array $value)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Get Ids
     *
     * @return list<int>
     */
    public function getIds(): array
    {
        return $this->Ids ?? [];
    }

    /**
     * Set Ids
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Get Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierTypeEnum
     *
     * @return list<'MOBILE_ADJUSTMENT'|'DESKTOP_ADJUSTMENT'|'SMART_TV_ADJUSTMENT'|'TABLET_ADJUSTMENT'|'DESKTOP_ONLY_ADJUSTMENT'|'DEMOGRAPHICS_ADJUSTMENT'|'RETARGETING_ADJUSTMENT'|'REGIONAL_ADJUSTMENT'|'VIDEO_ADJUSTMENT'|'SMART_AD_ADJUSTMENT'|'SERP_LAYOUT_ADJUSTMENT'|'INCOME_GRADE_ADJUSTMENT'|'AD_GROUP_ADJUSTMENT'>
     */
    public function getTypes(): array
    {
        return $this->Types ?? [];
    }

    /**
     * Set Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierTypeEnum
     *
     * @param list<'MOBILE_ADJUSTMENT'|'DESKTOP_ADJUSTMENT'|'SMART_TV_ADJUSTMENT'|'TABLET_ADJUSTMENT'|'DESKTOP_ONLY_ADJUSTMENT'|'DEMOGRAPHICS_ADJUSTMENT'|'RETARGETING_ADJUSTMENT'|'REGIONAL_ADJUSTMENT'|'VIDEO_ADJUSTMENT'|'SMART_AD_ADJUSTMENT'|'SERP_LAYOUT_ADJUSTMENT'|'INCOME_GRADE_ADJUSTMENT'|'AD_GROUP_ADJUSTMENT'> $value
     *
     * @return $this
     */
    public function setTypes(array $value)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Get Levels
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierLevelEnum
     *
     * @return non-empty-list<'CAMPAIGN'|'AD_GROUP'>
     */
    public function getLevels(): array
    {
        return $this->Levels;
    }

    /**
     * Set Levels
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\BidModifierLevelEnum
     *
     * @param non-empty-list<'CAMPAIGN'|'AD_GROUP'> $value
     *
     * @return $this
     */
    public function setLevels(array $value)
    {
        $this->Levels = $value;

        return $this;
    }
}
