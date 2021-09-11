<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsDynamicTextAdTargetsResponse
{
//    Can be omit.
//    protected $SetBidsResults = null;

    /**
     * Creates a new instance of SetBidsDynamicTextAdTargetsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SetBidsResults.
     *
     * @return SetBidsActionResult[]|null
     */
    public function getSetBidsResults(): ?array
    {
        return $this->SetBidsResults ?? null;
    }

    /**
     * Sets SetBidsResults.
     *
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
