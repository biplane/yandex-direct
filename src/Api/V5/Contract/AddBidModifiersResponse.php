<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddBidModifiersResponse
{
//    Can be omit.
//    protected $AddResults = null;

    /**
     * Creates a new instance of AddBidModifiersResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AddResults.
     *
     * @return MultiIdsActionResult[]|null
     */
    public function getAddResults(): ?array
    {
        return $this->AddResults ?? null;
    }

    /**
     * Sets AddResults.
     *
     * @param MultiIdsActionResult[]|null $value
     *
     * @return $this
     */
    public function setAddResults(?array $value = null)
    {
        $this->AddResults = $value;

        return $this;
    }
}
