<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingListGetItem extends RetargetingListBase
{

    protected $Id = null;

    protected $IsAvailable = null;

    protected $Scope = null;

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
     * Gets IsAvailable.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getIsAvailable()
    {
        return $this->IsAvailable;
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
        return $this->Scope;
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

