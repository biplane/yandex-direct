<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class StrategyDecreasedPriceForRepeatedImpressionsAddBase
{
    protected $AverageCpm = null;

    protected $SpendLimit = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAverageCpm(): int
    {
        return $this->AverageCpm;
    }

    /**
     * @return $this
     */
    public function setAverageCpm(int $value)
    {
        $this->AverageCpm = $value;

        return $this;
    }

    public function getSpendLimit(): int
    {
        return $this->SpendLimit;
    }

    /**
     * @return $this
     */
    public function setSpendLimit(int $value)
    {
        $this->SpendLimit = $value;

        return $this;
    }
}
