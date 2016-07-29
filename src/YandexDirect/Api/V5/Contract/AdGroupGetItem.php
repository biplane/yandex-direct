<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupGetItem extends AdGroupBase
{

    protected $Id = null;

    protected $Name = null;

    protected $CampaignId = null;

    protected $Status = null;

    protected $Type = null;

    protected $MobileAppAdGroup = null;

    protected $DynamicTextAdGroup = null;

    /**
     * Creates a new instance of AdGroupGetItem.
     *
     * @return AdGroupGetItem
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
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
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
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets Type.
     *
     * @return AdGroupTypesEnum|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets Type.
     *
     * @param AdGroupTypesEnum|null $value
     * @return $this
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroup.
     *
     * @return MobileAppAdGroupGet|null
     */
    public function getMobileAppAdGroup()
    {
        return $this->MobileAppAdGroup;
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
        return $this->DynamicTextAdGroup;
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


}

