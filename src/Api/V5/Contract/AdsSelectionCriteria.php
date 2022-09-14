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
//    protected $Ids = null;

//    Can be omitted.
//    protected $States = null;

//    Can be omitted.
//    protected $Statuses = null;

//    Can be omitted.
//    protected $CampaignIds = null;

//    Can be omitted.
//    protected $AdGroupIds = null;

//    Can be omitted.
//    protected $Types = null;

//    Can be omitted.
//    protected $Mobile = null;

//    Can be omitted.
//    protected $VCardIds = null;

//    Can be omitted.
//    protected $SitelinkSetIds = null;

//    Can be omitted.
//    protected $AdImageHashes = null;

//    Can be omitted.
//    protected $VCardModerationStatuses = null;

//    Can be omitted.
//    protected $SitelinksModerationStatuses = null;

//    Can be omitted.
//    protected $AdImageModerationStatuses = null;

//    Can be omitted.
//    protected $AdExtensionIds = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setIds(?array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * @see AdStateSelectionEnum
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->States ?? null;
    }

    /**
     * @see AdStateSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStates(?array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * @see AdStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->Statuses ?? null;
    }

    /**
     * @see AdStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setStatuses(?array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCampaignIds(?array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdGroupIds(): ?array
    {
        return $this->AdGroupIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdGroupIds(?array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * @see AdTypeEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
     * @see AdTypeEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setTypes(?array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getMobile(): ?string
    {
        return $this->Mobile ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setMobile(?string $value = null)
    {
        $this->Mobile = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getVCardIds(): ?array
    {
        return $this->VCardIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setVCardIds(?array $value = null)
    {
        $this->VCardIds = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getSitelinkSetIds(): ?array
    {
        return $this->SitelinkSetIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setSitelinkSetIds(?array $value = null)
    {
        $this->SitelinkSetIds = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAdImageHashes(?array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * @see ExtensionStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getVCardModerationStatuses(): ?array
    {
        return $this->VCardModerationStatuses ?? null;
    }

    /**
     * @see ExtensionStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setVCardModerationStatuses(?array $value = null)
    {
        $this->VCardModerationStatuses = $value;

        return $this;
    }

    /**
     * @see ExtensionStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getSitelinksModerationStatuses(): ?array
    {
        return $this->SitelinksModerationStatuses ?? null;
    }

    /**
     * @see ExtensionStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setSitelinksModerationStatuses(?array $value = null)
    {
        $this->SitelinksModerationStatuses = $value;

        return $this;
    }

    /**
     * @see ExtensionStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getAdImageModerationStatuses(): ?array
    {
        return $this->AdImageModerationStatuses ?? null;
    }

    /**
     * @see ExtensionStatusSelectionEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setAdImageModerationStatuses(?array $value = null)
    {
        $this->AdImageModerationStatuses = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAdExtensionIds(): ?array
    {
        return $this->AdExtensionIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setAdExtensionIds(?array $value = null)
    {
        $this->AdExtensionIds = $value;

        return $this;
    }
}
