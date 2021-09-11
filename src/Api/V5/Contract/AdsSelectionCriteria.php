<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdsSelectionCriteria
{
//    Can be omit.
//    protected $Ids = null;

//    Can be omit.
//    protected $States = null;

//    Can be omit.
//    protected $Statuses = null;

//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $AdGroupIds = null;

//    Can be omit.
//    protected $Types = null;

//    Can be omit.
//    protected $Mobile = null;

//    Can be omit.
//    protected $VCardIds = null;

//    Can be omit.
//    protected $SitelinkSetIds = null;

//    Can be omit.
//    protected $AdImageHashes = null;

//    Can be omit.
//    protected $VCardModerationStatuses = null;

//    Can be omit.
//    protected $SitelinksModerationStatuses = null;

//    Can be omit.
//    protected $AdImageModerationStatuses = null;

//    Can be omit.
//    protected $AdExtensionIds = null;

    /**
     * Creates a new instance of AdsSelectionCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->Ids ?? null;
    }

    /**
     * Sets Ids.
     *
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
     * Gets States.
     *
     * @see AdStateSelectionEnum
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->States ?? null;
    }

    /**
     * Sets States.
     *
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
     * Gets Statuses.
     *
     * @see AdStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getStatuses(): ?array
    {
        return $this->Statuses ?? null;
    }

    /**
     * Sets Statuses.
     *
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
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds(): ?array
    {
        return $this->CampaignIds ?? null;
    }

    /**
     * Sets CampaignIds.
     *
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
     * Gets AdGroupIds.
     *
     * @return int[]|null
     */
    public function getAdGroupIds(): ?array
    {
        return $this->AdGroupIds ?? null;
    }

    /**
     * Sets AdGroupIds.
     *
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
     * Gets Types.
     *
     * @see AdTypeEnum
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->Types ?? null;
    }

    /**
     * Sets Types.
     *
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
     * Gets Mobile.
     *
     * @see YesNoEnum
     */
    public function getMobile(): ?string
    {
        return $this->Mobile ?? null;
    }

    /**
     * Sets Mobile.
     *
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
     * Gets VCardIds.
     *
     * @return int[]|null
     */
    public function getVCardIds(): ?array
    {
        return $this->VCardIds ?? null;
    }

    /**
     * Sets VCardIds.
     *
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
     * Gets SitelinkSetIds.
     *
     * @return int[]|null
     */
    public function getSitelinkSetIds(): ?array
    {
        return $this->SitelinkSetIds ?? null;
    }

    /**
     * Sets SitelinkSetIds.
     *
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
     * Gets AdImageHashes.
     *
     * @return string[]|null
     */
    public function getAdImageHashes(): ?array
    {
        return $this->AdImageHashes ?? null;
    }

    /**
     * Sets AdImageHashes.
     *
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
     * Gets VCardModerationStatuses.
     *
     * @see ExtensionStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getVCardModerationStatuses(): ?array
    {
        return $this->VCardModerationStatuses ?? null;
    }

    /**
     * Sets VCardModerationStatuses.
     *
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
     * Gets SitelinksModerationStatuses.
     *
     * @see ExtensionStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getSitelinksModerationStatuses(): ?array
    {
        return $this->SitelinksModerationStatuses ?? null;
    }

    /**
     * Sets SitelinksModerationStatuses.
     *
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
     * Gets AdImageModerationStatuses.
     *
     * @see ExtensionStatusSelectionEnum
     *
     * @return string[]|null
     */
    public function getAdImageModerationStatuses(): ?array
    {
        return $this->AdImageModerationStatuses ?? null;
    }

    /**
     * Sets AdImageModerationStatuses.
     *
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
     * Gets AdExtensionIds.
     *
     * @return int[]|null
     */
    public function getAdExtensionIds(): ?array
    {
        return $this->AdExtensionIds ?? null;
    }

    /**
     * Sets AdExtensionIds.
     *
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
