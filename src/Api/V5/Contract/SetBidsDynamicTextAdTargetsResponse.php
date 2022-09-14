<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SetBidsDynamicTextAdTargetsResponse
{
//    Can be omitted.
//    protected $SetBidsResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return SetBidsActionResult[]|null
     */
    public function getSetBidsResults(): ?array
    {
        return $this->SetBidsResults ?? null;
    }

    /**
     * @param SetBidsActionResult[]|null $value
     *
     * @return $this
     */
    public function setSetBidsResults(?array $value = null)
    {
        $this->SetBidsResults = $value;

        return $this;
    }
}
