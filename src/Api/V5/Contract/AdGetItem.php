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

    protected $Subtype = null;

    protected $TextAd = null;

    protected $DynamicTextAd = null;

    protected $MobileAppAd = null;

    protected $TextImageAd = null;

    protected $MobileAppImageAd = null;

    protected $TextAdBuilderAd = null;

    protected $MobileAppAdBuilderAd = null;

    /**
     * Creates a new instance of AdGetItem.
     *
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setAdGroupId($value = null)
    {
        $this->AdGroupId = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     * @see StatusEnum
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return self
     * @see StatusEnum
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets State.
     *
     * @return string|null
     * @see StateEnum
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return self
     * @see StateEnum
     */
    public function setState($value = null)
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
     * @return self
     */
    public function setStatusClarification($value = null)
    {
        $this->StatusClarification = $value;

        return $this;
    }

    /**
     * Gets AdCategories.
     *
     * @return struct[]|null
     */
    public function getAdCategories()
    {
        return $this->AdCategories;
    }

    /**
     * Sets AdCategories.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setAdCategories(array $value = null)
    {
        $this->AdCategories = $value;

        return $this;
    }

    /**
     * Gets AgeLabel.
     *
     * @return string|null
     * @see AgeLabelEnum
     */
    public function getAgeLabel()
    {
        return $this->AgeLabel;
    }

    /**
     * Sets AgeLabel.
     *
     * @param string|null $value
     * @return self
     * @see AgeLabelEnum
     */
    public function setAgeLabel($value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return string|null
     * @see AdTypeEnum
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return self
     * @see AdTypeEnum
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets Subtype.
     *
     * @return string|null
     * @see AdSubtypeEnum
     */
    public function getSubtype()
    {
        return $this->Subtype;
    }

    /**
     * Sets Subtype.
     *
     * @param string|null $value
     * @return self
     * @see AdSubtypeEnum
     */
    public function setSubtype($value = null)
    {
        $this->Subtype = $value;

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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setMobileAppAd(MobileAppAdGet $value = null)
    {
        $this->MobileAppAd = $value;

        return $this;
    }

    /**
     * Gets TextImageAd.
     *
     * @return TextImageAdGet|null
     */
    public function getTextImageAd()
    {
        return $this->TextImageAd;
    }

    /**
     * Sets TextImageAd.
     *
     * @param TextImageAdGet|null $value
     * @return self
     */
    public function setTextImageAd(TextImageAdGet $value = null)
    {
        $this->TextImageAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppImageAd.
     *
     * @return MobileAppImageAdGet|null
     */
    public function getMobileAppImageAd()
    {
        return $this->MobileAppImageAd;
    }

    /**
     * Sets MobileAppImageAd.
     *
     * @param MobileAppImageAdGet|null $value
     * @return self
     */
    public function setMobileAppImageAd(MobileAppImageAdGet $value = null)
    {
        $this->MobileAppImageAd = $value;

        return $this;
    }

    /**
     * Gets TextAdBuilderAd.
     *
     * @return TextAdBuilderAdGet|null
     */
    public function getTextAdBuilderAd()
    {
        return $this->TextAdBuilderAd;
    }

    /**
     * Sets TextAdBuilderAd.
     *
     * @param TextAdBuilderAdGet|null $value
     * @return self
     */
    public function setTextAdBuilderAd(TextAdBuilderAdGet $value = null)
    {
        $this->TextAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdBuilderAd.
     *
     * @return MobileAppAdBuilderAdGet|null
     */
    public function getMobileAppAdBuilderAd()
    {
        return $this->MobileAppAdBuilderAd;
    }

    /**
     * Sets MobileAppAdBuilderAd.
     *
     * @param MobileAppAdBuilderAdGet|null $value
     * @return self
     */
    public function setMobileAppAdBuilderAd(MobileAppAdBuilderAdGet $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }


}

