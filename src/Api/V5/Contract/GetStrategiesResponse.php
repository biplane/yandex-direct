<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetStrategiesResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Strategies = null;

    /**
     * @return StrategyGetItem[]|null
     */
    public function getStrategies(): ?array
    {
        return $this->Strategies ?? null;
    }

    /**
     * @param StrategyGetItem[]|null $value
     *
     * @return $this
     */
    public function setStrategies(?array $value = null)
    {
        $this->Strategies = $value;

        return $this;
    }
}
