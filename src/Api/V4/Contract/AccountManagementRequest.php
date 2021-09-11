<?php

declare(strict_types=1);

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

    protected $PayMethodID = null;

    protected $CustomTransactionID = null;

    protected $Version = null;

    /**
     * Creates a new instance of AccountManagementRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Action.
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets SelectionCriteria.
     */
    public function getSelectionCriteria(): ?AccountSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Sets SelectionCriteria.
     *
     * @return $this
     */
    public function setSelectionCriteria(?AccountSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Gets Payments.
     *
     * @return Payment[]|null
     */
    public function getPayments(): ?array
    {
        return $this->Payments;
    }

    /**
     * Sets Payments.
     *
     * @param Payment[]|null $value
     *
     * @return $this
     */
    public function setPayments(?array $value = null)
    {
        $this->Payments = $value;

        return $this;
    }

    /**
     * Gets Transfers.
     *
     * @return Transfer[]|null
     */
    public function getTransfers(): ?array
    {
        return $this->Transfers;
    }

    /**
     * Sets Transfers.
     *
     * @param Transfer[]|null $value
     *
     * @return $this
     */
    public function setTransfers(?array $value = null)
    {
        $this->Transfers = $value;

        return $this;
    }

    /**
     * Gets Accounts.
     *
     * @return Account[]|null
     */
    public function getAccounts(): ?array
    {
        return $this->Accounts;
    }

    /**
     * Sets Accounts.
     *
     * @param Account[]|null $value
     *
     * @return $this
     */
    public function setAccounts(?array $value = null)
    {
        $this->Accounts = $value;

        return $this;
    }

    /**
     * Gets PayMethodID.
     */
    public function getPayMethodID(): ?string
    {
        return $this->PayMethodID;
    }

    /**
     * Sets PayMethodID.
     *
     * @return $this
     */
    public function setPayMethodID(?string $value = null)
    {
        $this->PayMethodID = $value;

        return $this;
    }

    /**
     * Gets CustomTransactionID.
     */
    public function getCustomTransactionID(): ?string
    {
        return $this->CustomTransactionID;
    }

    /**
     * Sets CustomTransactionID.
     *
     * @return $this
     */
    public function setCustomTransactionID(?string $value = null)
    {
        $this->CustomTransactionID = $value;

        return $this;
    }

    /**
     * Gets Version.
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }

    /**
     * Sets Version.
     *
     * @return $this
     */
    public function setVersion(?string $value = null)
    {
        $this->Version = $value;

        return $this;
    }
}
