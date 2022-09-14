<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ToggleBidModifiersResponse
{
//    Can be omitted.
//    protected $ToggleResults = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ToggleResult[]|null
     */
    public function getToggleResults(): ?array
    {
        return $this->ToggleResults ?? null;
    }

    /**
     * @param ToggleResult[]|null $value
     *
     * @return $this
     */
    public function setToggleResults(?array $value = null)
    {
        $this->ToggleResults = $value;

        return $this;
    }
}
