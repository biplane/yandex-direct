<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AccountManagementRequest
{

    protected $Action = null;

    protected $SelectionCriteria = null;

    protected $Payments = null;

    protected $Transfers = null;

    protected $Accounts = null;

    /**
     * Creates a new instance of AccountManagementRequest.
     *
     * @return AccountManagementRequest
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @param string $value
     * @return $this
     */
    public function setAction($value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     *
     * @return AccountSelectionCriteria|null
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @param AccountSelectionCriteria|null $value
     * @return $this
     */
    public function setSelectionCriteria(AccountSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets Payments.
     *
     * @return Payment[]|null
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * Sets Payments.
     *
     * @param Payment[]|null $value
     * @return $this
     */
    public function setPayments(array $value = null)
    {
        $this->Payments = $value;

        return $this;
    }

    /**
     * Gets Transfers.
     *
     * @return Transfer[]|null
     */
    public function getTransfers()
    {
        return $this->Transfers;
    }

    /**
     * Sets Transfers.
     *
     * @param Transfer[]|null $value
     * @return $this
     */
    public function setTransfers(array $value = null)
    {
        $this->Transfers = $value;

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

