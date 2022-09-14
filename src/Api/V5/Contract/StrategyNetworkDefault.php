<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class StrategyNetworkDefault
{
//    Can be omitted.
//    protected $LimitPercent = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLimitPercent(): ?int
    {
        return $this->LimitPercent ?? null;
    }

    /**
     * @return $this
     */
    public function setLimitPercent(?int $value = null)
    {
        $this->LimitPercent = $value;

        return $this;
    }
}
