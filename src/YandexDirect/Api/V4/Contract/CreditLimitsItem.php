<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CreditLimitsItem
{
    /**
     * @var string
     */
    protected $ContractID;
    /**
     * @var float
     */
    protected $Limit;
    /**
     * @var float
     */
    protected $LimitSpent;

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
     * Gets the ContractID.
     *
     * @return string
     */
    public function getContractID()
    {
        return $this->ContractID;
    }

    /**
     * Sets the ContractID.
     *
     * @param string $ContractID
     *
     * @return CreditLimitsItem
     */
    public function setContractID($ContractID)
    {
        $this->ContractID = $ContractID;

        return $this;
    }

    /**
     * Gets the Limit.
     *
     * @return float
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets the Limit.
     *
     * @param float $Limit
     *
     * @return CreditLimitsItem
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * Gets the LimitSpent.
     *
     * @return float
     */
    public function getLimitSpent()
    {
        return $this->LimitSpent;
    }

    /**
     * Sets the LimitSpent.
     *
     * @param float $LimitSpent
     *
     * @return CreditLimitsItem
     */
    public function setLimitSpent($LimitSpent)
    {
        $this->LimitSpent = $LimitSpent;

        return $this;
    }
}