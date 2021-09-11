<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CreditLimitsItem
{
    protected $ContractID = null;

    protected $Limit = null;

    protected $LimitSpent = null;

    /**
     * Creates a new instance of CreditLimitsItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ContractID.
     */
    public function getContractID(): string
    {
        return $this->ContractID;
    }

    /**
     * Sets ContractID.
     *
     * @return $this
     */
    public function setContractID(string $value)
    {
        $this->ContractID = $value;

        return $this;
    }

    /**
     * Gets Limit.
     */
    public function getLimit(): float
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @return $this
     */
    public function setLimit(float $value)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets LimitSpent.
     */
    public function getLimitSpent(): float
    {
        return $this->LimitSpent;
    }

    /**
     * Sets LimitSpent.
     *
     * @return $this
     */
    public function setLimitSpent(float $value)
    {
        $this->LimitSpent = $value;

        return $this;
    }
}
