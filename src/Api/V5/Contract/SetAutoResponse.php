<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetAutoResponse
{
//    Can be omit.
//    protected $SetAutoResults = null;

    /**
     * Creates a new instance of SetAutoResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SetAutoResults.
     *
     * @return KeywordBidActionResult[]|null
     */
    public function getSetAutoResults(): ?array
    {
        return $this->SetAutoResults ?? null;
    }

    /**
     * Sets SetAutoResults.
     *
     * @param KeywordBidActionResult[]|null $value
     *
     * @return $this
     */
    public function setSetAutoResults(?array $value = null)
    {
        $this->SetAutoResults = $value;

        return $this;
    }
}
