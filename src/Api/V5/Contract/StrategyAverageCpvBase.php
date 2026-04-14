<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyAverageCpvBase
{
    /** @var int */
    protected $AverageCpv;

    /** @var int */
    protected $SpendLimit;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get AverageCpv
     */
    public function getAverageCpv(): int
    {
        return $this->AverageCpv;
    }

    /**
     * Set AverageCpv
     *
     * @return $this
     */
    public function setAverageCpv(int $value)
    {
        $this->AverageCpv = $value;

        return $this;
    }

    /**
     * Get SpendLimit
     */
    public function getSpendLimit(): int
    {
        return $this->SpendLimit;
    }

    /**
     * Set SpendLimit
     *
     * @return $this
     */
    public function setSpendLimit(int $value)
    {
        $this->SpendLimit = $value;

        return $this;
    }
}
