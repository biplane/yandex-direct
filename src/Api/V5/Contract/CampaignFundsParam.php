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

//    Can be omit.
//    protected $SumAvailableForTransfer = null;

    /**
     * Creates a new instance of CampaignFundsParam.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Sum.
     */
    public function getSum(): int
    {
        return $this->Sum;
    }

    /**
     * Sets Sum.
     *
     * @return $this
     */
    public function setSum(int $value)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Gets Balance.
     */
    public function getBalance(): int
    {
        return $this->Balance;
    }

    /**
     * Sets Balance.
     *
     * @return $this
     */
    public function setBalance(int $value)
    {
        $this->Balance = $value;

        return $this;
    }

    /**
     * Gets BalanceBonus.
     */
    public function getBalanceBonus(): int
    {
        return $this->BalanceBonus;
    }

    /**
     * Sets BalanceBonus.
     *
     * @return $this
     */
    public function setBalanceBonus(int $value)
    {
        $this->BalanceBonus = $value;

        return $this;
    }

    /**
     * Gets SumAvailableForTransfer.
     */
    public function getSumAvailableForTransfer(): ?int
    {
        return $this->SumAvailableForTransfer ?? null;
    }

    /**
     * Sets SumAvailableForTransfer.
     *
     * @return $this
     */
    public function setSumAvailableForTransfer(?int $value = null)
    {
        $this->SumAvailableForTransfer = $value;

        return $this;
    }
}
