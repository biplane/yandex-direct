<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GrantItem
{

    protected $Privilege = null;

    protected $Value = null;

    /**
     * Creates a new instance of GrantItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Privilege.
     *
     * @return string
     * @see PrivilegeEnum
     */
    public function getPrivilege()
    {
        return $this->Privilege;
    }

    /**
     * Sets Privilege.
     *
     * @param string $value
     * @return $this
     * @see PrivilegeEnum
     */
    public function setPrivilege($value)
    {
        $this->Privilege = $value;

        return $this;
    }

    /**
     * Gets Value.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @param string $value
     * @return $this
     * @see YesNoEnum
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }


}

