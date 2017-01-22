<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Grant
{

    protected $Agency = null;

    protected $Privilege = null;

    protected $Value = null;

    /**
     * Creates a new instance of Grant.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Agency.
     *
     * @return string|null
     */
    public function getAgency()
    {
        return $this->Agency;
    }

    /**
     * Sets Agency.
     *
     * @param string|null $value
     * @return self
     */
    public function setAgency($value = null)
    {
        $this->Agency = $value;

        return $this;
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
     * @return self
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
     * @return self
     * @see YesNoEnum
     */
    public function setValue($value)
    {
        $this->Value = $value;

        return $this;
    }


}

