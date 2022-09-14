<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCpvAddBase
{
    protected $AverageCpv = null;

    protected $SpendLimit = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAverageCpv(): int
    {
        return $this->AverageCpv;
    }

    /**
     * @return $this
     */
    public function setAverageCpv(int $value)
    {
        $this->AverageCpv = $value;

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
