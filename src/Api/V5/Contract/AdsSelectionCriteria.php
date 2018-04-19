<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return isset($this->Ids) ? $this->Ids : null;
    }

    /**
     * Sets Ids.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets States.
     *
     * @return string[]|null
     * @see AdStateSelectionEnum
     */
    public function getStates()
    {
        return isset($this->States) ? $this->States : null;
    }

    /**
     * Sets States.
     *
     * @param string[]|null $value
     * @return self
     * @see AdStateSelectionEnum
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return string[]|null
     * @see AdStatusSelectionEnum
     */
    public function getStatuses()
    {
        return isset($this->Statuses) ? $this->Statuses : null;
    }

    /**
     * Sets Statuses.
     *
     * @param string[]|null $value
     * @return self
     * @see AdStatusSelectionEnum
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets CampaignIds.
     *
     * @return int[]|null
     */
    public function getCampaignIds()
    {
        return isset($this->CampaignIds) ? $this->CampaignIds : null;
    }

    /**
     * Sets CampaignIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setCampaignIds(array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets AdGroupIds.
     *
     * @return int[]|null
     */
    public function getAdGroupIds()
    {
        return isset($this->AdGroupIds) ? $this->AdGroupIds : null;
    }

    /**
     * Sets AdGroupIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setAdGroupIds(array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @return string[]|null
     * @see AdTypeEnum
     */
    public function getTypes()
    {
        return isset($this->Types) ? $this->Types : null;
    }

    /**
     * Sets Types.
     *
     * @param string[]|null $value
     * @return self
     * @see AdTypeEnum
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets Mobile.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getMobile()
    {
        return isset($this->Mobile) ? $this->Mobile : null;
    }

    /**
     * Sets Mobile.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setMobile($value = null)
    {
        $this->Mobile = $value;

        return $this;
    }

    /**
     * Gets VCardIds.
     *
     * @return int[]|null
     */
    public function getVCardIds()
    {
        return isset($this->VCardIds) ? $this->VCardIds : null;
    }

    /**
     * Sets VCardIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setVCardIds(array $value = null)
    {
        $this->VCardIds = $value;

        return $this;
    }

    /**
     * Gets SitelinkSetIds.
     *
     * @return int[]|null
     */
    public function getSitelinkSetIds()
    {
        return isset($this->SitelinkSetIds) ? $this->SitelinkSetIds : null;
    }

    /**
     * Sets SitelinkSetIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setSitelinkSetIds(array $value = null)
    {
        $this->SitelinkSetIds = $value;

        return $this;
    }

    /**
     * Gets AdImageHashes.
     *
     * @return string[]|null
     */
    public function getAdImageHashes()
    {
        return isset($this->AdImageHashes) ? $this->AdImageHashes : null;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setAdImageHashes(array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Gets VCardModerationStatuses.
     *
     * @return string[]|null
     * @see ExtensionStatusSelectionEnum
     */
    public function getVCardModerationStatuses()
    {
        return isset($this->VCardModerationStatuses) ? $this->VCardModerationStatuses : null;
    }

    /**
     * Sets VCardModerationStatuses.
     *
     * @param string[]|null $value
     * @return self
     * @see ExtensionStatusSelectionEnum
     */
    public function setVCardModerationStatuses(array $value = null)
    {
        $this->VCardModerationStatuses = $value;

        return $this;
    }

    /**
     * Gets SitelinksModerationStatuses.
     *
     * @return string[]|null
     * @see ExtensionStatusSelectionEnum
     */
    public function getSitelinksModerationStatuses()
    {
        return isset($this->SitelinksModerationStatuses) ? $this->SitelinksModerationStatuses : null;
    }

    /**
     * Sets SitelinksModerationStatuses.
     *
     * @param string[]|null $value
     * @return self
     * @see ExtensionStatusSelectionEnum
     */
    public function setSitelinksModerationStatuses(array $value = null)
    {
        $this->SitelinksModerationStatuses = $value;

        return $this;
    }

    /**
     * Gets AdImageModerationStatuses.
     *
     * @return string[]|null
     * @see ExtensionStatusSelectionEnum
     */
    public function getAdImageModerationStatuses()
    {
        return isset($this->AdImageModerationStatuses) ? $this->AdImageModerationStatuses : null;
    }

    /**
     * Sets AdImageModerationStatuses.
     *
     * @param string[]|null $value
     * @return self
     * @see ExtensionStatusSelectionEnum
     */
    public function setAdImageModerationStatuses(array $value = null)
    {
        $this->AdImageModerationStatuses = $value;

        return $this;
    }

    /**
     * Gets AdExtensionIds.
     *
     * @return int[]|null
     */
    public function getAdExtensionIds()
    {
        return isset($this->AdExtensionIds) ? $this->AdExtensionIds : null;
    }

    /**
     * Sets AdExtensionIds.
     *
     * @param int[]|null $value
     * @return self
     */
    public function setAdExtensionIds(array $value = null)
    {
        $this->AdExtensionIds = $value;

        return $this;
    }


}

