<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGetItem
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $AdGroupId = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $State = null;

//    Can be omit.
//    protected $StatusClarification = null;

//    Can be omit.
//    protected $AdCategories = null;

//    Can be omit.
//    protected $AgeLabel = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Subtype = null;

//    Can be omit.
//    protected $TextAd = null;

//    Can be omit.
//    protected $DynamicTextAd = null;

//    Can be omit.
//    protected $MobileAppAd = null;

//    Can be omit.
//    protected $TextImageAd = null;

//    Can be omit.
//    protected $MobileAppImageAd = null;

//    Can be omit.
//    protected $TextAdBuilderAd = null;

//    Can be omit.
//    protected $MobileAppAdBuilderAd = null;

//    Can be omit.
//    protected $CpmBannerAdBuilderAd = null;

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
        return isset($this->Id) ? $this->Id : null;
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
        return isset($this->CampaignId) ? $this->CampaignId : null;
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
        return isset($this->AdGroupId) ? $this->AdGroupId : null;
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
     * @return string|null
     * @see StatusEnum
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->State) ? $this->State : null;
    }

    /**
     * Sets State.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->StatusClarification) ? $this->StatusClarification : null;
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
     * @return struct[]|null
     */
    public function getAdCategories()
    {
        return isset($this->AdCategories) ? $this->AdCategories : null;
    }

    /**
     * Sets AdCategories.
     *
     * @param struct[]|null $value
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
     * @return string|null
     * @see AgeLabelEnum
     */
    public function getAgeLabel()
    {
        return isset($this->AgeLabel) ? $this->AgeLabel : null;
    }

    /**
     * Sets AgeLabel.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Type) ? $this->Type : null;
    }

    /**
     * Sets Type.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Subtype) ? $this->Subtype : null;
    }

    /**
     * Sets Subtype.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->TextAd) ? $this->TextAd : null;
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
        return isset($this->DynamicTextAd) ? $this->DynamicTextAd : null;
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
        return isset($this->MobileAppAd) ? $this->MobileAppAd : null;
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

    /**
     * Gets TextImageAd.
     *
     * @return TextImageAdGet|null
     */
    public function getTextImageAd()
    {
        return isset($this->TextImageAd) ? $this->TextImageAd : null;
    }

    /**
     * Sets TextImageAd.
     *
     * @param TextImageAdGet|null $value
     * @return $this
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
        return isset($this->MobileAppImageAd) ? $this->MobileAppImageAd : null;
    }

    /**
     * Sets MobileAppImageAd.
     *
     * @param MobileAppImageAdGet|null $value
     * @return $this
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
        return isset($this->TextAdBuilderAd) ? $this->TextAdBuilderAd : null;
    }

    /**
     * Sets TextAdBuilderAd.
     *
     * @param TextAdBuilderAdGet|null $value
     * @return $this
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
        return isset($this->MobileAppAdBuilderAd) ? $this->MobileAppAdBuilderAd : null;
    }

    /**
     * Sets MobileAppAdBuilderAd.
     *
     * @param MobileAppAdBuilderAdGet|null $value
     * @return $this
     */
    public function setMobileAppAdBuilderAd(MobileAppAdBuilderAdGet $value = null)
    {
        $this->MobileAppAdBuilderAd = $value;

        return $this;
    }

    /**
     * Gets CpmBannerAdBuilderAd.
     *
     * @return CpmBannerAdBuilderAdGet|null
     */
    public function getCpmBannerAdBuilderAd()
    {
        return isset($this->CpmBannerAdBuilderAd) ? $this->CpmBannerAdBuilderAd : null;
    }

    /**
     * Sets CpmBannerAdBuilderAd.
     *
     * @param CpmBannerAdBuilderAdGet|null $value
     * @return $this
     */
    public function setCpmBannerAdBuilderAd(CpmBannerAdBuilderAdGet $value = null)
    {
        $this->CpmBannerAdBuilderAd = $value;

        return $this;
    }


}

