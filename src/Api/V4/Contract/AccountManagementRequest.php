<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AccountManagementRequest
{
    /** @var string */
    protected $Action;

    /** @var AccountSelectionCriteria|null */
    protected $SelectionCriteria = null;

//    Can be omitted.
//    protected $Payments;

//    Can be omitted.
//    protected $Transfers;

//    Can be omitted.
//    protected $Accounts;

    /** @var string|null */
    protected $PayMethodID = null;

    /** @var string|null */
    protected $CustomTransactionID = null;

    /** @var string|null */
    protected $Version = null;

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
     * Get Action
     */
    public function getAction(): string
    {
        return $this->Action;
    }

    /**
     * Set Action
     *
     * @return $this
     */
    public function setAction(string $value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): ?AccountSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(?AccountSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get Payments
     *
     * @return list<Payment>|null
     */
    public function getPayments(): ?array
    {
        return $this->Payments ?? null;
    }

    /**
     * Set Payments
     *
     * @param list<Payment>|null $value
     *
     * @return $this
     */
    public function setPayments(?array $value)
    {
        $this->Payments = $value;

        return $this;
    }

    /**
     * Get Transfers
     *
     * @return list<Transfer>|null
     */
    public function getTransfers(): ?array
    {
        return $this->Transfers ?? null;
    }

    /**
     * Set Transfers
     *
     * @param list<Transfer>|null $value
     *
     * @return $this
     */
    public function setTransfers(?array $value)
    {
        $this->Transfers = $value;

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

    /**
     * Get PayMethodID
     */
    public function getPayMethodID(): ?string
    {
        return $this->PayMethodID;
    }

    /**
     * Set PayMethodID
     *
     * @return $this
     */
    public function setPayMethodID(?string $value)
    {
        $this->PayMethodID = $value;

        return $this;
    }

    /**
     * Get CustomTransactionID
     */
    public function getCustomTransactionID(): ?string
    {
        return $this->CustomTransactionID;
    }

    /**
     * Set CustomTransactionID
     *
     * @return $this
     */
    public function setCustomTransactionID(?string $value)
    {
        $this->CustomTransactionID = $value;

        return $this;
    }

    /**
     * Get Version
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }

    /**
     * Set Version
     *
     * @return $this
     */
    public function setVersion(?string $value)
    {
        $this->Version = $value;

        return $this;
    }
}
