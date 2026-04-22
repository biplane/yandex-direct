<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdGroupsSelectionCriteria
{
//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $Types;

//    Can be omitted.
//    protected $Statuses;

//    Can be omitted.
//    protected $TagIds;

//    Can be omitted.
//    protected $Tags;

//    Can be omitted.
//    protected $AppIconStatuses;

//    Can be omitted.
//    protected $ServingStatuses;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
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
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum
     *
     * @return list<'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'>
     */
    public function getTypes(): array
    {
        return $this->Types ?? [];
    }

    /**
     * Set Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum
     *
     * @param list<'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'> $value
     *
     * @return $this
     */
    public function setTypes(array $value)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Get Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupStatusSelectionEnum
     *
     * @return list<'ACCEPTED'|'DRAFT'|'MODERATION'|'REJECTED'|'PREACCEPTED'>
     */
    public function getStatuses(): array
    {
        return $this->Statuses ?? [];
    }

    /**
     * Set Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupStatusSelectionEnum
     *
     * @param list<'ACCEPTED'|'DRAFT'|'MODERATION'|'REJECTED'|'PREACCEPTED'> $value
     *
     * @return $this
     */
    public function setStatuses(array $value)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Get TagIds
     *
     * @return list<int>
     */
    public function getTagIds(): array
    {
        return $this->TagIds ?? [];
    }

    /**
     * Set TagIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setTagIds(array $value)
    {
        $this->TagIds = $value;

        return $this;
    }

    /**
     * Get Tags
     *
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->Tags ?? [];
    }

    /**
     * Set Tags
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setTags(array $value)
    {
        $this->Tags = $value;

        return $this;
    }

    /**
     * Get AppIconStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupAppIconStatusSelectionEnum
     *
     * @return list<'ACCEPTED'|'MODERATION'|'REJECTED'>
     */
    public function getAppIconStatuses(): array
    {
        return $this->AppIconStatuses ?? [];
    }

    /**
     * Set AppIconStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupAppIconStatusSelectionEnum
     *
     * @param list<'ACCEPTED'|'MODERATION'|'REJECTED'> $value
     *
     * @return $this
     */
    public function setAppIconStatuses(array $value)
    {
        $this->AppIconStatuses = $value;

        return $this;
    }

    /**
     * Get ServingStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @return list<'ELIGIBLE'|'RARELY_SERVED'>
     */
    public function getServingStatuses(): array
    {
        return $this->ServingStatuses ?? [];
    }

    /**
     * Set ServingStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @param list<'ELIGIBLE'|'RARELY_SERVED'> $value
     *
     * @return $this
     */
    public function setServingStatuses(array $value)
    {
        $this->ServingStatuses = $value;

        return $this;
    }

    /**
     * Get NegativeKeywordSharedSetIds
     *
     * @return list<int>
     */
    public function getNegativeKeywordSharedSetIds(): array
    {
        return $this->NegativeKeywordSharedSetIds ?? [];
    }

    /**
     * Set NegativeKeywordSharedSetIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(array $value)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }
}
