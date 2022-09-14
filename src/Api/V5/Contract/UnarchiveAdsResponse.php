<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnarchiveAdsResponse
{
//    Can be omitted.
//    protected $UnarchiveResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ActionResult[]|null
     */
    public function getUnarchiveResults(): ?array
    {
        return $this->UnarchiveResults ?? null;
    }

    /**
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setUnarchiveResults(?array $value = null)
    {
        $this->UnarchiveResults = $value;

        return $this;
    }
}
