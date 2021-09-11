<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Privilege.
     *
     * @see PrivilegeEnum
     */
    public function getPrivilege(): string
    {
        return $this->Privilege;
    }

    /**
     * Sets Privilege.
     *
     * @see PrivilegeEnum
     *
     * @return $this
     */
    public function setPrivilege(string $value)
    {
        $this->Privilege = $value;

        return $this;
    }

    /**
     * Gets Value.
     *
     * @see YesNoEnum
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * Sets Value.
     *
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
