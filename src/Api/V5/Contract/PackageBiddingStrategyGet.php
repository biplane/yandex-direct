<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PackageBiddingStrategyGet
{
    protected $StrategyId = null;

    protected $Platform = null;

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

    /**
     * @see PlatformEnum
     */
    public function getPlatform(): string
    {
        return $this->Platform;
    }

    /**
     * @see PlatformEnum
     *
     * @return $this
     */
    public function setPlatform(string $value)
    {
        $this->Platform = $value;

        return $this;
    }
}
