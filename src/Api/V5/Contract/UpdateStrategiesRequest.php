<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UpdateStrategiesRequest
{
    protected $Strategies = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return StrategyUpdateItem[]
     */
    public function getStrategies(): array
    {
        return $this->Strategies;
    }

    /**
     * @param StrategyUpdateItem[] $value
     *
     * @return $this
     */
    public function setStrategies(array $value)
    {
        $this->Strategies = $value;

        return $this;
    }
}
