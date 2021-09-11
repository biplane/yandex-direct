<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SuspendAudienceTargetsResponse
{
    protected $SuspendResults = [];

    /**
     * Creates a new instance of SuspendAudienceTargetsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SuspendResults.
     *
     * @return ActionResult[]
     */
    public function getSuspendResults(): array
    {
        return $this->SuspendResults;
    }

    /**
     * Sets SuspendResults.
     *
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
