<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupUpdateItem extends AdGroupBase
{

    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $MobileAppAdGroup = null;

//    Can be omit.
//    protected $DynamicTextAdGroup = null;

//    Can be omit.
//    protected $SmartAdGroup = null;

//    Can be omit.
//    protected $TextAdGroupFeedParams = null;

    /**
     * Creates a new instance of AdGroupUpdateItem.
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
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
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
     * Gets MobileAppAdGroup.
     *
     * @return MobileAppAdGroupUpdate|null
     */
    public function getMobileAppAdGroup()
    {
        return isset($this->MobileAppAdGroup) ? $this->MobileAppAdGroup : null;
    }

    /**
     * Sets MobileAppAdGroup.
     *
     * @param MobileAppAdGroupUpdate|null $value
     * @return $this
     */
    public function setMobileAppAdGroup(MobileAppAdGroupUpdate $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroup.
     *
     * @return DynamicTextAdGroup|null
     */
    public function getDynamicTextAdGroup()
    {
        return isset($this->DynamicTextAdGroup) ? $this->DynamicTextAdGroup : null;
    }

    /**
     * Sets DynamicTextAdGroup.
     *
     * @param DynamicTextAdGroup|null $value
     * @return $this
     */
    public function setDynamicTextAdGroup(DynamicTextAdGroup $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Gets SmartAdGroup.
     *
     * @return SmartAdGroupUpdate|null
     */
    public function getSmartAdGroup()
    {
        return isset($this->SmartAdGroup) ? $this->SmartAdGroup : null;
    }

    /**
     * Sets SmartAdGroup.
     *
     * @param SmartAdGroupUpdate|null $value
     * @return $this
     */
    public function setSmartAdGroup(SmartAdGroupUpdate $value = null)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }

    /**
     * Gets TextAdGroupFeedParams.
     *
     * @return TextAdGroupFeedParamsUpdate|null
     */
    public function getTextAdGroupFeedParams()
    {
        return isset($this->TextAdGroupFeedParams) ? $this->TextAdGroupFeedParams : null;
    }

    /**
     * Sets TextAdGroupFeedParams.
     *
     * @param TextAdGroupFeedParamsUpdate|null $value
     * @return $this
     */
    public function setTextAdGroupFeedParams(TextAdGroupFeedParamsUpdate $value = null)
    {
        $this->TextAdGroupFeedParams = $value;

        return $this;
    }


}

