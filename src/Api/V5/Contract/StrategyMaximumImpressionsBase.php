<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyMaximumImpressionsBase
{
    /** @var int */
    protected $AverageCpm;

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
     * Get AverageCpm
     */
    public function getAverageCpm(): int
    {
        return $this->AverageCpm;
    }

    /**
     * Set AverageCpm
     *
     * @return $this
     */
    public function setAverageCpm(int $value)
    {
        $this->AverageCpm = $value;

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
