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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setDynamicTextAdGroup(DynamicTextAdGroup $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }


}

