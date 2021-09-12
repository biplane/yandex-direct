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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    public function getSelectionCriteria(): ?AccountSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * @return $this
     */
    public function setSelectionCriteria(?AccountSelectionCriteria $value = null)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * @return Payment[]|null
     */
    public function getPayments(): ?array
    {
        return $this->Payments;
    }

    /**
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
     * @return Transfer[]|null
     */
    public function getTransfers(): ?array
    {
        return $this->Transfers;
    }

    /**
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

    public function getPayMethodID(): ?string
    {
        return $this->PayMethodID;
    }

    /**
     * @return $this
     */
    public function setPayMethodID(?string $value = null)
    {
        $this->PayMethodID = $value;

        return $this;
    }

    public function getCustomTransactionID(): ?string
    {
        return $this->CustomTransactionID;
    }

    /**
     * @return $this
     */
    public function setCustomTransactionID(?string $value = null)
    {
        $this->CustomTransactionID = $value;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->Version;
    }

    /**
     * @return $this
     */
    public function setVersion(?string $value = null)
    {
        $this->Version = $value;

        return $this;
    }
}
