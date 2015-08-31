<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AccountManagementRequest
{
    /**
     * @var string
     */
    protected $Action;
    /**
     * @var AccountSelectionCriteria
     */
    protected $SelectionCriteria;
    /**
     * @var Payment[]
     */
    protected $Payments;
    /**
     * @var Transfer[]
     */
    protected $Transfers;
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
     * Gets the Action.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets the Action.
     *
     * @param string $Action
     *
     * @return AccountManagementRequest
     */
    public function setAction($Action)
    {
        $this->Action = $Action;

        return $this;
    }

    /**
     * Gets the SelectionCriteria.
     *
     * @return AccountSelectionCriteria
     */
    public function getSelectionCriteria()
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets the SelectionCriteria.
     *
     * @param AccountSelectionCriteria $SelectionCriteria
     *
     * @return AccountManagementRequest
     */
    public function setSelectionCriteria(AccountSelectionCriteria $SelectionCriteria)
    {
        $this->SelectionCriteria = $SelectionCriteria;

        return $this;
    }

    /**
     * Gets the Payments.
     *
     * @return Payment[]
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * Sets the Payments.
     *
     * @param Payment[] $Payments
     *
     * @return AccountManagementRequest
     */
    public function setPayments(array $Payments)
    {
        $this->Payments = $Payments;

        return $this;
    }

    /**
     * Gets the Transfers.
     *
     * @return Transfer[]
     */
    public function getTransfers()
    {
        return $this->Transfers;
    }

    /**
     * Sets the Transfers.
     *
     * @param Transfer[] $Transfers
     *
     * @return AccountManagementRequest
     */
    public function setTransfers(array $Transfers)
    {
        $this->Transfers = $Transfers;

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
     * @return AccountManagementRequest
     */
    public function setAccounts(array $Accounts)
    {
        $this->Accounts = $Accounts;

        return $this;
    }
}