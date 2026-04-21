<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GrantItem
{
    /** @var 'EDIT_CAMPAIGNS'|'IMPORT_XLS'|'TRANSFER_MONEY' */
    protected $Privilege;

    /** @var 'YES'|'NO' */
    protected $Value;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Privilege
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PrivilegeEnum
     *
     * @return 'EDIT_CAMPAIGNS'|'IMPORT_XLS'|'TRANSFER_MONEY'
     */
    public function getPrivilege(): string
    {
        return $this->Privilege;
    }

    /**
     * Set Privilege
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\PrivilegeEnum
     *
     * @param 'EDIT_CAMPAIGNS'|'IMPORT_XLS'|'TRANSFER_MONEY' $value
     *
     * @return $this
     */
    public function setPrivilege(string $value)
    {
        $this->Privilege = $value;

        return $this;
    }

    /**
     * Get Value
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getValue(): string
    {
        return $this->Value;
    }

    /**
     * Set Value
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->Value = $value;

        return $this;
    }
}
