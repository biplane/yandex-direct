<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupGetItem extends AdGroupBase
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $CampaignId = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Subtype = null;

//    Can be omit.
//    protected $MobileAppAdGroup = null;

//    Can be omit.
//    protected $DynamicTextAdGroup = null;

//    Can be omit.
//    protected $DynamicTextFeedAdGroup = null;

//    Can be omit.
//    protected $SmartAdGroup = null;

//    Can be omit.
//    protected $ServingStatus = null;

//    Can be omit.
//    protected $RestrictedRegionIds = null;

//    Can be omit.
//    protected $TextAdGroupFeedParams = null;

    /**
     * Creates a new instance of AdGroupGetItem.
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
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

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
     * Gets Type.
     *
     * @return string|null
     * @see AdGroupTypesEnum
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
     * @see AdGroupTypesEnum
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
     * @see AdGroupSubtypeEnum
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
     * @see AdGroupSubtypeEnum
     */
    public function setSubtype($value = null)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroup.
     *
     * @return MobileAppAdGroupGet|null
     */
    public function getMobileAppAdGroup()
    {
        return isset($this->MobileAppAdGroup) ? $this->MobileAppAdGroup : null;
    }

    /**
     * Sets MobileAppAdGroup.
     *
     * @param MobileAppAdGroupGet|null $value
     * @return $this
     */
    public function setMobileAppAdGroup(MobileAppAdGroupGet $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroup.
     *
     * @return DynamicTextAdGroupGet|null
     */
    public function getDynamicTextAdGroup()
    {
        return isset($this->DynamicTextAdGroup) ? $this->DynamicTextAdGroup : null;
    }

    /**
     * Sets DynamicTextAdGroup.
     *
     * @param DynamicTextAdGroupGet|null $value
     * @return $this
     */
    public function setDynamicTextAdGroup(DynamicTextAdGroupGet $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextFeedAdGroup.
     *
     * @return DynamicTextFeedAdGroupGet|null
     */
    public function getDynamicTextFeedAdGroup()
    {
        return isset($this->DynamicTextFeedAdGroup) ? $this->DynamicTextFeedAdGroup : null;
    }

    /**
     * Sets DynamicTextFeedAdGroup.
     *
     * @param DynamicTextFeedAdGroupGet|null $value
     * @return $this
     */
    public function setDynamicTextFeedAdGroup(DynamicTextFeedAdGroupGet $value = null)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    /**
     * Gets SmartAdGroup.
     *
     * @return SmartAdGroupGet|null
     */
    public function getSmartAdGroup()
    {
        return isset($this->SmartAdGroup) ? $this->SmartAdGroup : null;
    }

    /**
     * Sets SmartAdGroup.
     *
     * @param SmartAdGroupGet|null $value
     * @return $this
     */
    public function setSmartAdGroup(SmartAdGroupGet $value = null)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }

    /**
     * Gets ServingStatus.
     *
     * @return string|null
     * @see ServingStatusEnum
     */
    public function getServingStatus()
    {
        return isset($this->ServingStatus) ? $this->ServingStatus : null;
    }

    /**
     * Sets ServingStatus.
     *
     * @param string|null $value
     * @return $this
     * @see ServingStatusEnum
     */
    public function setServingStatus($value = null)
    {
        $this->ServingStatus = $value;

        return $this;
    }

    /**
     * Gets RestrictedRegionIds.
     *
     * @return float[]|null
     */
    public function getRestrictedRegionIds()
    {
        return isset($this->RestrictedRegionIds) ? $this->RestrictedRegionIds : null;
    }

    /**
     * Sets RestrictedRegionIds.
     *
     * @param float[]|null $value
     * @return $this
     */
    public function setRestrictedRegionIds(array $value = null)
    {
        $this->RestrictedRegionIds = $value;

        return $this;
    }

    /**
     * Gets TextAdGroupFeedParams.
     *
     * @return TextAdGroupFeedParamsGet|null
     */
    public function getTextAdGroupFeedParams()
    {
        return isset($this->TextAdGroupFeedParams) ? $this->TextAdGroupFeedParams : null;
    }

    /**
     * Sets TextAdGroupFeedParams.
     *
     * @param TextAdGroupFeedParamsGet|null $value
     * @return $this
     */
    public function setTextAdGroupFeedParams(TextAdGroupFeedParamsGet $value = null)
    {
        $this->TextAdGroupFeedParams = $value;

        return $this;
    }


}

