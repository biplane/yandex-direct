<?php

namespace Biplane\YandexDirectBundle\Contract;

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
     * @return string
     */
    public function getContractID()
    {
        return $this->ContractID;
    }

    /**
     * @param string $ContractID
     * @return CreditLimitsItem
     */
    public function setContractID($ContractID)
    {
        $this->ContractID = $ContractID;

        return $this;
    }

    /**
     * @return float
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * @param float $Limit
     * @return CreditLimitsItem
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * @return float
     */
    public function getLimitSpent()
    {
        return $this->LimitSpent;
    }

    /**
     * @param float $LimitSpent
     * @return CreditLimitsItem
     */
    public function setLimitSpent($LimitSpent)
    {
        $this->LimitSpent = $LimitSpent;

        return $this;
    }
}