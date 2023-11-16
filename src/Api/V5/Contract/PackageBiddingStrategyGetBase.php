<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PackageBiddingStrategyGetBase
{
    protected $StrategyId = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getStrategyId(): int
    {
        return $this->StrategyId;
    }

    /**
     * @return $this
     */
    public function setStrategyId(int $value)
    {
        $this->StrategyId = $value;

        return $this;
    }
}
