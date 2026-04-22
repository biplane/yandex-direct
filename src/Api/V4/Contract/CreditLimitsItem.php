<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CreditLimitsItem
{
    /** @var string */
    protected $ContractID;

    /** @var float */
    protected $Limit;

    /** @var float */
    protected $LimitSpent;

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
     * Get ContractID
     */
    public function getContractID(): string
    {
        return $this->ContractID;
    }

    /**
     * Set ContractID
     *
     * @return $this
     */
    public function setContractID(string $value)
    {
        $this->ContractID = $value;

        return $this;
    }

    /**
     * Get Limit
     */
    public function getLimit(): float
    {
        return $this->Limit;
    }

    /**
     * Set Limit
     *
     * @return $this
     */
    public function setLimit(float $value)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Get LimitSpent
     */
    public function getLimitSpent(): float
    {
        return $this->LimitSpent;
    }

    /**
     * Set LimitSpent
     *
     * @return $this
     */
    public function setLimitSpent(float $value)
    {
        $this->LimitSpent = $value;

        return $this;
    }
}
