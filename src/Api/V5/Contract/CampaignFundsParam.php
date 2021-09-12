<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CampaignFundsParam
{
    protected $Sum = null;

    protected $Balance = null;

    protected $BalanceBonus = null;

//    Can be omitted.
//    protected $SumAvailableForTransfer = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getSum(): int
    {
        return $this->Sum;
    }

    /**
     * @return $this
     */
    public function setSum(int $value)
    {
        $this->Sum = $value;

        return $this;
    }

    public function getBalance(): int
    {
        return $this->Balance;
    }

    /**
     * @return $this
     */
    public function setBalance(int $value)
    {
        $this->Balance = $value;

        return $this;
    }

    public function getBalanceBonus(): int
    {
        return $this->BalanceBonus;
    }

    /**
     * @return $this
     */
    public function setBalanceBonus(int $value)
    {
        $this->BalanceBonus = $value;

        return $this;
    }

    public function getSumAvailableForTransfer(): ?int
    {
        return $this->SumAvailableForTransfer ?? null;
    }

    /**
     * @return $this
     */
    public function setSumAvailableForTransfer(?int $value = null)
    {
        $this->SumAvailableForTransfer = $value;

        return $this;
    }
}
