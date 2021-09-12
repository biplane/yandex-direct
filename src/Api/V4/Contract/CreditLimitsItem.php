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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getContractID(): string
    {
        return $this->ContractID;
    }

    /**
     * @return $this
     */
    public function setContractID(string $value)
    {
        $this->ContractID = $value;

        return $this;
    }

    public function getLimit(): float
    {
        return $this->Limit;
    }

    /**
     * @return $this
     */
    public function setLimit(float $value)
    {
        $this->Limit = $value;

        return $this;
    }

    public function getLimitSpent(): float
    {
        return $this->LimitSpent;
    }

    /**
     * @return $this
     */
    public function setLimitSpent(float $value)
    {
        $this->LimitSpent = $value;

        return $this;
    }
}
