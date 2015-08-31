<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AccountManagementResponse
{
    /**
     * @var AccountActionResult[]
     */
    protected $ActionsResult;
    /**
     * @var Account[]
     */
    protected $Accounts;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the ActionsResult.
     *
     * @return AccountActionResult[]
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets the ActionsResult.
     *
     * @param AccountActionResult[] $ActionsResult
     *
     * @return AccountManagementResponse
     */
    public function setActionsResult(array $ActionsResult)
    {
        $this->ActionsResult = $ActionsResult;

        return $this;
    }

    /**
     * Gets the Accounts.
     *
     * @return Account[]
     */
    public function getAccounts()
    {
        return $this->Accounts;
    }

    /**
     * Sets the Accounts.
     *
     * @param Account[] $Accounts
     *
     * @return AccountManagementResponse
     */
    public function setAccounts(array $Accounts)
    {
        $this->Accounts = $Accounts;

        return $this;
    }
}