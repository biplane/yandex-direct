<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignFundsParam
{

    protected $Sum = null;

    protected $Balance = null;

    protected $BalanceBonus = null;

//    Can be omit.
//    protected $SumAvailableForTransfer = null;

    /**
     * Creates a new instance of CampaignFundsParam.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Sum.
     *
     * @return int
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Sets Sum.
     *
     * @param int $value
     * @return self
     */
    public function setSum($value)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Gets Balance.
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * Sets Balance.
     *
     * @param int $value
     * @return self
     */
    public function setBalance($value)
    {
        $this->Balance = $value;

        return $this;
    }

    /**
     * Gets BalanceBonus.
     *
     * @return int
     */
    public function getBalanceBonus()
    {
        return $this->BalanceBonus;
    }

    /**
     * Sets BalanceBonus.
     *
     * @param int $value
     * @return self
     */
    public function setBalanceBonus($value)
    {
        $this->BalanceBonus = $value;

        return $this;
    }

    /**
     * Gets SumAvailableForTransfer.
     *
     * @return int|null
     */
    public function getSumAvailableForTransfer()
    {
        return isset($this->SumAvailableForTransfer) ? $this->SumAvailableForTransfer : null;
    }

    /**
     * Sets SumAvailableForTransfer.
     *
     * @param int|null $value
     * @return self
     */
    public function setSumAvailableForTransfer($value = null)
    {
        $this->SumAvailableForTransfer = $value;

        return $this;
    }


}

