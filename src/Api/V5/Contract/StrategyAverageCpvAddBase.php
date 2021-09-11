<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyAverageCpvAddBase
{
    protected $AverageCpv = null;

    protected $SpendLimit = null;

    /**
     * Creates a new instance of StrategyAverageCpvAddBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AverageCpv.
     */
    public function getAverageCpv(): int
    {
        return $this->AverageCpv;
    }

    /**
     * Sets AverageCpv.
     *
     * @return $this
     */
    public function setAverageCpv(int $value)
    {
        $this->AverageCpv = $value;

        return $this;
    }

    /**
     * Gets SpendLimit.
     */
    public function getSpendLimit(): int
    {
        return $this->SpendLimit;
    }

    /**
     * Sets SpendLimit.
     *
     * @return $this
     */
    public function setSpendLimit(int $value)
    {
        $this->SpendLimit = $value;

        return $this;
    }
}
