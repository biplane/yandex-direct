<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyMaximumImpressionsBase
{
    protected $AverageCpm = null;

    protected $SpendLimit = null;

    /**
     * Creates a new instance of StrategyMaximumImpressionsBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AverageCpm.
     */
    public function getAverageCpm(): int
    {
        return $this->AverageCpm;
    }

    /**
     * Sets AverageCpm.
     *
     * @return $this
     */
    public function setAverageCpm(int $value)
    {
        $this->AverageCpm = $value;

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
