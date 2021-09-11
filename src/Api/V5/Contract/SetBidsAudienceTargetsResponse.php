<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsAudienceTargetsResponse
{
    protected $SetBidsResults = [];

    /**
     * Creates a new instance of SetBidsAudienceTargetsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SetBidsResults.
     *
     * @return SetBidsActionResult[]
     */
    public function getSetBidsResults(): array
    {
        return $this->SetBidsResults;
    }

    /**
     * Sets SetBidsResults.
     *
     * @param SetBidsActionResult[] $value
     *
     * @return $this
     */
    public function setSetBidsResults(array $value)
    {
        $this->SetBidsResults = $value;

        return $this;
    }
}
