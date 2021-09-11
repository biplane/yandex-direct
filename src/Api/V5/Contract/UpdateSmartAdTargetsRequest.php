<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateSmartAdTargetsRequest
{
    protected $SmartAdTargets = [];

    /**
     * Creates a new instance of UpdateSmartAdTargetsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SmartAdTargets.
     *
     * @return SmartAdTargetUpdateItem[]
     */
    public function getSmartAdTargets(): array
    {
        return $this->SmartAdTargets;
    }

    /**
     * Sets SmartAdTargets.
     *
     * @param SmartAdTargetUpdateItem[] $value
     *
     * @return $this
     */
    public function setSmartAdTargets(array $value)
    {
        $this->SmartAdTargets = $value;

        return $this;
    }
}
