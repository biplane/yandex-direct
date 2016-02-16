<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGetItem
{

    protected $Id = null;

    protected $CampaignId = null;

    protected $AdGroupId = null;

    protected $Status = null;

    protected $State = null;

    protected $StatusClarification = null;

    protected $AdCategories = null;

    protected $AgeLabel = null;

    protected $Type = null;

    protected $TextAd = null;

    protected $DynamicTextAd = null;

    protected $MobileAppAd = null;

    /**
     * Creates a new instance of AdGetItem.
     *
     * @return AdGetItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets CampaignId.
     *
     * @return int|null
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setCampaignId($value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets AdGroupId.
     *
     * @return int|null
     */
    public function getAdGroupId()
    {
        return $this->AdGroupId;
    }

    /**
     * Sets AdGroupId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return StatusEnum|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param StatusEnum|null $value
     * @return $this
     */
    public function setStatus(StatusEnum $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return StateEnum|null
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Sets State.
     *
     * @param StateEnum|null $value
     * @return $this
     */
    public function setState(StateEnum $value = null)
    {
        $this->State = $value;

        return $this;
    }

    /**
     * Gets StatusClarification.
     *
     * @return string|null
     */
    public function getStatusClarification()
    {
        return $this->StatusClarification;
    }

    /**
     * Sets StatusClarification.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatusClarification($value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Gets AdCategories.
     *
     * @return AdCategoryEnum[]|null
     */
    public function getAdCategories()
    {
        return $this->AdCategories;
    }

    /**
     * Sets AdCategories.
     *
     * @param AdCategoryEnum[]|null $value
     * @return $this
     */
    public function setAdCategories(array $value = null)
    {
        $this->AdCategories = $value;

        return $this;
    }

    /**
     * Gets AgeLabel.
     *
     * @return AgeLabelEnum|null
     */
    public function getAgeLabel()
    {
        return $this->AgeLabel;
    }

    /**
     * Sets AgeLabel.
     *
     * @param AgeLabelEnum|null $value
     * @return $this
     */
    public function setAgeLabel(AgeLabelEnum $value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return AdTypeEnum|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param AdTypeEnum|null $value
     * @return $this
     */
    public function setType(AdTypeEnum $value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets TextAd.
     *
     * @return TextAdGet|null
     */
    public function getTextAd()
    {
        return $this->TextAd;
    }

    /**
     * Sets TextAd.
     *
     * @param TextAdGet|null $value
     * @return $this
     */
    public function setTextAd(TextAdGet $value = null)
    {
        $this->TextAd = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAd.
     *
     * @return DynamicTextAdGet|null
     */
    public function getDynamicTextAd()
    {
        return $this->DynamicTextAd;
    }

    /**
     * Sets DynamicTextAd.
     *
     * @param DynamicTextAdGet|null $value
     * @return $this
     */
    public function setDynamicTextAd(DynamicTextAdGet $value = null)
    {
        $this->DynamicTextAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAd.
     *
     * @return MobileAppAdGet|null
     */
    public function getMobileAppAd()
    {
        return $this->MobileAppAd;
    }

    /**
     * Sets MobileAppAd.
     *
     * @param MobileAppAdGet|null $value
     * @return $this
     */
    public function setMobileAppAd(MobileAppAdGet $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }


}

