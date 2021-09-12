<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AccountManagementResponse
{
    protected $ActionsResult = null;

    protected $Accounts = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AccountActionResult[]|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult;
    }

    /**
     * @param AccountActionResult[]|null $value
     *
     * @return $this
     */
    public function setActionsResult(?array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * @return Account[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->Accounts;
    }

    /**
     * @param Account[]|null $value
     *
     * @return $this
     */
    public function setAccounts(?array $value = null)
    {
        $this->Accounts = $value;

        return $this;
    }
}
