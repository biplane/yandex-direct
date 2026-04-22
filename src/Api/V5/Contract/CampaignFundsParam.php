<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CampaignFundsParam
{
    /** @var int */
    protected $Sum;

    /** @var int */
    protected $Balance;

    /** @var int */
    protected $BalanceBonus;

//    Can be omitted.
//    protected $SumAvailableForTransfer;

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
     * Get Sum
     */
    public function getSum(): int
    {
        return $this->Sum;
    }

    /**
     * Set Sum
     *
     * @return $this
     */
    public function setSum(int $value)
    {
        $this->Sum = $value;

        return $this;
    }

    /**
     * Get Balance
     */
    public function getBalance(): int
    {
        return $this->Balance;
    }

    /**
     * Set Balance
     *
     * @return $this
     */
    public function setBalance(int $value)
    {
        $this->Balance = $value;

        return $this;
    }

    /**
     * Get BalanceBonus
     */
    public function getBalanceBonus(): int
    {
        return $this->BalanceBonus;
    }

    /**
     * Set BalanceBonus
     *
     * @return $this
     */
    public function setBalanceBonus(int $value)
    {
        $this->BalanceBonus = $value;

        return $this;
    }

    /**
     * Get SumAvailableForTransfer
     */
    public function getSumAvailableForTransfer(): ?int
    {
        return $this->SumAvailableForTransfer ?? null;
    }

    /**
     * Set SumAvailableForTransfer
     *
     * @return $this
     */
    public function setSumAvailableForTransfer(?int $value)
    {
        $this->SumAvailableForTransfer = $value;

        return $this;
    }
}
