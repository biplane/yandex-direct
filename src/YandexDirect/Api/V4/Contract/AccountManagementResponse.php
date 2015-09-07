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
     * @return AccountManagementResponse
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
     * @param array|null $value
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
     * @param array|null $value
     * @return $this
     */
    public function setAccounts(array $value = null)
    {
        $this->Accounts = $value;

        return $this;
    }


}

