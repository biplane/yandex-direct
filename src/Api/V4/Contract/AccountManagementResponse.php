<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AccountManagementResponse
{

    protected $ActionsResult = null;

    protected $Accounts = null;

    /**
     * Creates a new instance of AccountManagementResponse.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ActionsResult.
     *
     * @return AccountActionResult[]|null
     */
    public function getActionsResult()
    {
        return $this->ActionsResult;
    }

    /**
     * Sets ActionsResult.
     *
     * @param AccountActionResult[]|null $value
     * @return $this
     */
    public function setActionsResult(array $value = null)
    {
        $this->ActionsResult = $value;

        return $this;
    }

    /**
     * Gets Accounts.
     *
     * @return Account[]|null
     */
    public function getAccounts()
    {
        return $this->Accounts;
    }

    /**
     * Sets Accounts.
     *
     * @param Account[]|null $value
     * @return $this
     */
    public function setAccounts(array $value = null)
    {
        $this->Accounts = $value;

        return $this;
    }


}

