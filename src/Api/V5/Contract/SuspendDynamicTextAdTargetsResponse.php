<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SuspendDynamicTextAdTargetsResponse
{
    protected $SuspendResults = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ActionResult[]
     */
    public function getSuspendResults(): array
    {
        return $this->SuspendResults;
    }

    /**
     * @param ActionResult[] $value
     *
     * @return $this
     */
    public function setSuspendResults(array $value)
    {
        $this->SuspendResults = $value;

        return $this;
    }
}
