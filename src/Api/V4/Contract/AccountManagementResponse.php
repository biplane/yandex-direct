<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AccountManagementResponse
{
//    Can be omitted.
//    protected $ActionsResult;

//    Can be omitted.
//    protected $Accounts;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get ActionsResult
     *
     * @return list<AccountActionResult>|null
     */
    public function getActionsResult(): ?array
    {
        return $this->ActionsResult ?? null;
    }

    /**
     * Set ActionsResult
     *
     * @param list<AccountActionResult>|null $value
     *
     * @return $this
     */
    public function setActionsResult(?array $value)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * Get Accounts
     *
     * @return list<Account>|null
     */
    public function getAccounts(): ?array
    {
        return $this->Accounts ?? null;
    }

    /**
     * Set Accounts
     *
     * @param list<Account>|null $value
     *
     * @return $this
     */
    public function setAccounts(?array $value)
    {
        $this->Accounts = $value;

        return $this;
    }
}
