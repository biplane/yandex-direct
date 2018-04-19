<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListGetItem extends RetargetingListBase
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $IsAvailable = null;

//    Can be omit.
//    protected $Scope = null;

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
     * @return self
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
     * @return self
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
     * @return self
     * @see RetargetingListScopeEnum
     */
    public function setScope($value = null)
    {
        $this->Scope = $value;

        return $this;
    }


}

