<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ContractID.
     *
     * @return string
     */
    public function getContractID()
    {
        return $this->ContractID;
    }

    /**
     * Sets ContractID.
     *
     * @param string $value
     * @return $this
     */
    public function setContractID($value)
    {
        $this->ContractID = $value;

        return $this;
    }

    /**
     * Gets Limit.
     *
     * @return float
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @param float $value
     * @return $this
     */
    public function setLimit($value)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets LimitSpent.
     *
     * @return float
     */
    public function getLimitSpent()
    {
        return $this->LimitSpent;
    }

    /**
     * Sets LimitSpent.
     *
     * @param float $value
     * @return $this
     */
    public function setLimitSpent($value)
    {
        $this->LimitSpent = $value;

        return $this;
    }


}

