<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendAdsResponse
{
//    Can be omitted.
//    protected $SuspendResults = null;

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
    public function getSuspendResults(): ?array
    {
        return $this->SuspendResults ?? null;
    }

    /**
     * @param ActionResult[]|null $value
     *
     * @return $this
     */
    public function setSuspendResults(?array $value = null)
    {
        $this->SuspendResults = $value;

        return $this;
    }
}
