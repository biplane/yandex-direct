<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdsSelectionCriteria
{
//    Can be omitted.
//    protected $Ids;

//    Can be omitted.
//    protected $States;

//    Can be omitted.
//    protected $Statuses;

//    Can be omitted.
//    protected $CampaignIds;

//    Can be omitted.
//    protected $AdGroupIds;

//    Can be omitted.
//    protected $Types;

//    Can be omitted.
//    protected $Mobile;

//    Can be omitted.
//    protected $VCardIds;

//    Can be omitted.
//    protected $SitelinkSetIds;

//    Can be omitted.
//    protected $AdImageHashes;

//    Can be omitted.
//    protected $VCardModerationStatuses;

//    Can be omitted.
//    protected $SitelinksModerationStatuses;

//    Can be omitted.
//    protected $AdImageModerationStatuses;

//    Can be omitted.
//    protected $AdExtensionIds;

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
     * Get States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdStateSelectionEnum
     *
     * @return list<'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'>
     */
    public function getStates(): array
    {
        return $this->States ?? [];
    }

    /**
     * Set States
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdStateSelectionEnum
     *
     * @param list<'OFF'|'ON'|'SUSPENDED'|'OFF_BY_MONITORING'|'ARCHIVED'> $value
     *
     * @return $this
     */
    public function setStates(array $value)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Get Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdStatusSelectionEnum
     *
     * @return list<'DRAFT'|'MODERATION'|'PREACCEPTED'|'ACCEPTED'|'REJECTED'>
     */
    public function getStatuses(): array
    {
        return $this->Statuses ?? [];
    }

    /**
     * Set Statuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdStatusSelectionEnum
     *
     * @param list<'DRAFT'|'MODERATION'|'PREACCEPTED'|'ACCEPTED'|'REJECTED'> $value
     *
     * @return $this
     */
    public function setStatuses(array $value)
    {
        $this->Statuses = $value;

        return $this;
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
     * Get Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdTypeEnum
     *
     * @return list<'TEXT_AD'|'MOBILE_APP_AD'|'DYNAMIC_TEXT_AD'|'IMAGE_AD'|'CPC_VIDEO_AD'|'CPM_BANNER_AD'|'CPM_VIDEO_AD'|'SMART_AD'|'SHOPPING_AD'|'LISTING_AD'>
     */
    public function getTypes(): array
    {
        return $this->Types ?? [];
    }

    /**
     * Set Types
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdTypeEnum
     *
     * @param list<'TEXT_AD'|'MOBILE_APP_AD'|'DYNAMIC_TEXT_AD'|'IMAGE_AD'|'CPC_VIDEO_AD'|'CPM_BANNER_AD'|'CPM_VIDEO_AD'|'SMART_AD'|'SHOPPING_AD'|'LISTING_AD'> $value
     *
     * @return $this
     */
    public function setTypes(array $value)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Get Mobile
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getMobile(): ?string
    {
        return $this->Mobile ?? null;
    }

    /**
     * Set Mobile
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setMobile(?string $value)
    {
        $this->Mobile = $value;

        return $this;
    }

    /**
     * Get VCardIds
     *
     * @return list<int>
     */
    public function getVCardIds(): array
    {
        return $this->VCardIds ?? [];
    }

    /**
     * Set VCardIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setVCardIds(array $value)
    {
        $this->VCardIds = $value;

        return $this;
    }

    /**
     * Get SitelinkSetIds
     *
     * @return list<int>
     */
    public function getSitelinkSetIds(): array
    {
        return $this->SitelinkSetIds ?? [];
    }

    /**
     * Set SitelinkSetIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setSitelinkSetIds(array $value)
    {
        $this->SitelinkSetIds = $value;

        return $this;
    }

    /**
     * Get AdImageHashes
     *
     * @return list<string>
     */
    public function getAdImageHashes(): array
    {
        return $this->AdImageHashes ?? [];
    }

    /**
     * Set AdImageHashes
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setAdImageHashes(array $value)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Get VCardModerationStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum
     *
     * @return list<'DRAFT'|'MODERATION'|'ACCEPTED'|'REJECTED'>
     */
    public function getVCardModerationStatuses(): array
    {
        return $this->VCardModerationStatuses ?? [];
    }

    /**
     * Set VCardModerationStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum
     *
     * @param list<'DRAFT'|'MODERATION'|'ACCEPTED'|'REJECTED'> $value
     *
     * @return $this
     */
    public function setVCardModerationStatuses(array $value)
    {
        $this->VCardModerationStatuses = $value;

        return $this;
    }

    /**
     * Get SitelinksModerationStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum
     *
     * @return list<'DRAFT'|'MODERATION'|'ACCEPTED'|'REJECTED'>
     */
    public function getSitelinksModerationStatuses(): array
    {
        return $this->SitelinksModerationStatuses ?? [];
    }

    /**
     * Set SitelinksModerationStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum
     *
     * @param list<'DRAFT'|'MODERATION'|'ACCEPTED'|'REJECTED'> $value
     *
     * @return $this
     */
    public function setSitelinksModerationStatuses(array $value)
    {
        $this->SitelinksModerationStatuses = $value;

        return $this;
    }

    /**
     * Get AdImageModerationStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum
     *
     * @return list<'DRAFT'|'MODERATION'|'ACCEPTED'|'REJECTED'>
     */
    public function getAdImageModerationStatuses(): array
    {
        return $this->AdImageModerationStatuses ?? [];
    }

    /**
     * Set AdImageModerationStatuses
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum
     *
     * @param list<'DRAFT'|'MODERATION'|'ACCEPTED'|'REJECTED'> $value
     *
     * @return $this
     */
    public function setAdImageModerationStatuses(array $value)
    {
        $this->AdImageModerationStatuses = $value;

        return $this;
    }

    /**
     * Get AdExtensionIds
     *
     * @return list<int>
     */
    public function getAdExtensionIds(): array
    {
        return $this->AdExtensionIds ?? [];
    }

    /**
     * Set AdExtensionIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setAdExtensionIds(array $value)
    {
        $this->AdExtensionIds = $value;

        return $this;
    }
}
