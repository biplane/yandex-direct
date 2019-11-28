<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListGetItem extends RetargetingListBase
{

//    Can be omit.
//    protected $Type = null;

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $IsAvailable = null;

//    Can be omit.
//    protected $Scope = null;

//    Can be omit.
//    protected $AvailableForTargetsInAdGroupTypes = null;

    /**
     * Creates a new instance of RetargetingListGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Type.
     *
     * @return string|null
     * @see RetargetingListTypeEnum
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
     * @see RetargetingListTypeEnum
     */
    public function setType($value = null)
    {
        $this->Type = $value;

        return $this;
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
     * Gets IsAvailable.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getIsAvailable()
    {
        return isset($this->IsAvailable) ? $this->IsAvailable : null;
    }

    /**
     * Sets IsAvailable.
     *
     * @param string|null $value
     * @return $this
     * @see YesNoEnum
     */
    public function setIsAvailable($value = null)
    {
        $this->IsAvailable = $value;

        return $this;
    }

    /**
     * Gets Scope.
     *
     * @return string|null
     * @see RetargetingListScopeEnum
     */
    public function getScope()
    {
        return isset($this->Scope) ? $this->Scope : null;
    }

    /**
     * Sets Scope.
     *
     * @param string|null $value
     * @return $this
     * @see RetargetingListScopeEnum
     */
    public function setScope($value = null)
    {
        $this->Scope = $value;

        return $this;
    }

    /**
     * Gets AvailableForTargetsInAdGroupTypes.
     *
     * @return AvailableForTargetsInAdGroupTypesArray|null
     */
    public function getAvailableForTargetsInAdGroupTypes()
    {
        return isset($this->AvailableForTargetsInAdGroupTypes) ? $this->AvailableForTargetsInAdGroupTypes : null;
    }

    /**
     * Sets AvailableForTargetsInAdGroupTypes.
     *
     * @param AvailableForTargetsInAdGroupTypesArray|null $value
     * @return $this
     */
    public function setAvailableForTargetsInAdGroupTypes(AvailableForTargetsInAdGroupTypesArray $value = null)
    {
        $this->AvailableForTargetsInAdGroupTypes = $value;

        return $this;
    }


}

