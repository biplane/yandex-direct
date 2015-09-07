<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdsSelectionCriteria
{

    protected $Ids = null;

    protected $States = null;

    protected $Statuses = null;

    protected $CampaignIds = null;

    protected $AdGroupIds = null;

    protected $Types = null;

    protected $Mobile = null;

    protected $VCardIds = null;

    protected $SitelinkSetIds = null;

    protected $AdImageHashes = null;

    protected $VCardModerationStatuses = null;

    protected $SitelinksModerationStatuses = null;

    protected $AdImageModerationStatuses = null;

    /**
     * Creates a new instance of AdsSelectionCriteria.
     *
     * @return AdsSelectionCriteria
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Ids.
     *
     * @return long[]|null
     */
    public function getIds()
    {
        return $this->Ids;
    }

    /**
     * Sets Ids.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setIds(array $value = null)
    {
        $this->Ids = $value;

        return $this;
    }

    /**
     * Gets States.
     *
     * @return StateEnum[]|null
     */
    public function getStates()
    {
        return $this->States;
    }

    /**
     * Sets States.
     *
     * @param StateEnum[]|null $value
     * @return $this
     */
    public function setStates(array $value = null)
    {
        $this->States = $value;

        return $this;
    }

    /**
     * Gets Statuses.
     *
     * @return StatusEnum[]|null
     */
    public function getStatuses()
    {
        return $this->Statuses;
    }

    /**
     * Sets Statuses.
     *
     * @param StatusEnum[]|null $value
     * @return $this
     */
    public function setStatuses(array $value = null)
    {
        $this->Statuses = $value;

        return $this;
    }

    /**
     * Gets CampaignIds.
     *
     * @return long[]|null
     */
    public function getCampaignIds()
    {
        return $this->CampaignIds;
    }

    /**
     * Sets CampaignIds.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setCampaignIds(array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets AdGroupIds.
     *
     * @return long[]|null
     */
    public function getAdGroupIds()
    {
        return $this->AdGroupIds;
    }

    /**
     * Sets AdGroupIds.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setAdGroupIds(array $value = null)
    {
        $this->AdGroupIds = $value;

        return $this;
    }

    /**
     * Gets Types.
     *
     * @return AdTypeEnum[]|null
     */
    public function getTypes()
    {
        return $this->Types;
    }

    /**
     * Sets Types.
     *
     * @param AdTypeEnum[]|null $value
     * @return $this
     */
    public function setTypes(array $value = null)
    {
        $this->Types = $value;

        return $this;
    }

    /**
     * Gets Mobile.
     *
     * @return YesNoEnum|null
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * Sets Mobile.
     *
     * @param YesNoEnum|null $value
     * @return $this
     */
    public function setMobile(YesNoEnum $value = null)
    {
        $this->Mobile = $value;

        return $this;
    }

    /**
     * Gets VCardIds.
     *
     * @return long[]|null
     */
    public function getVCardIds()
    {
        return $this->VCardIds;
    }

    /**
     * Sets VCardIds.
     *
     * @param long[]|null $value
     * @return $this
     */
    public function setVCardIds(array $value = null)
    {
        $this->VCardIds = $value;

        return $this;
    }

    /**
     * Gets SitelinkSetIds.
     *
     * @return long[]|null
     */
    public function getSitelinkSetIds()
    {
        return $this->SitelinkSetIds;
    }

    /**
     * Sets SitelinkSetIds.
     *
     * @param long[]|null $value
     * @return $this
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
        return $this->AdImageHashes;
    }

    /**
     * Sets AdImageHashes.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setAdImageHashes(array $value = null)
    {
        $this->AdImageHashes = $value;

        return $this;
    }

    /**
     * Gets VCardModerationStatuses.
     *
     * @return StatusEnum[]|null
     */
    public function getVCardModerationStatuses()
    {
        return $this->VCardModerationStatuses;
    }

    /**
     * Sets VCardModerationStatuses.
     *
     * @param StatusEnum[]|null $value
     * @return $this
     */
    public function setVCardModerationStatuses(array $value = null)
    {
        $this->VCardModerationStatuses = $value;

        return $this;
    }

    /**
     * Gets SitelinksModerationStatuses.
     *
     * @return StatusEnum[]|null
     */
    public function getSitelinksModerationStatuses()
    {
        return $this->SitelinksModerationStatuses;
    }

    /**
     * Sets SitelinksModerationStatuses.
     *
     * @param StatusEnum[]|null $value
     * @return $this
     */
    public function setSitelinksModerationStatuses(array $value = null)
    {
        $this->SitelinksModerationStatuses = $value;

        return $this;
    }

    /**
     * Gets AdImageModerationStatuses.
     *
     * @return StatusEnum[]|null
     */
    public function getAdImageModerationStatuses()
    {
        return $this->AdImageModerationStatuses;
    }

    /**
     * Sets AdImageModerationStatuses.
     *
     * @param StatusEnum[]|null $value
     * @return $this
     */
    public function setAdImageModerationStatuses(array $value = null)
    {
        $this->AdImageModerationStatuses = $value;

        return $this;
    }


}

