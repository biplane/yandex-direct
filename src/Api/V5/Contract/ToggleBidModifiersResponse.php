<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ToggleBidModifiersResponse
{
//    Can be omit.
//    protected $ToggleResults = null;

    /**
     * Creates a new instance of ToggleBidModifiersResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ToggleResults.
     *
     * @return ToggleResult[]|null
     */
    public function getToggleResults(): ?array
    {
        return $this->ToggleResults ?? null;
    }

    /**
     * Sets ToggleResults.
     *
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
