<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupUpdateItem extends AdGroupBase
{

    protected $Id = null;

    protected $Name = null;

    protected $MobileAppAdGroup = null;

    /**
     * Creates a new instance of AdGroupUpdateItem.
     *
     * @return AdGroupUpdateItem
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
     * Gets MobileAppAdGroup.
     *
     * @return MobileAppAdGroupUpdate|null
     */
    public function getMobileAppAdGroup()
    {
        return $this->MobileAppAdGroup;
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


}

