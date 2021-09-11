<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddSmartAdTargetsRequest
{
    protected $SmartAdTargets = [];

    /**
     * Creates a new instance of AddSmartAdTargetsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets SmartAdTargets.
     *
     * @return SmartAdTargetAddItem[]
     */
    public function getSmartAdTargets(): array
    {
        return $this->SmartAdTargets;
    }

    /**
     * Sets SmartAdTargets.
     *
     * @param SmartAdTargetAddItem[] $value
     *
     * @return $this
     */
    public function setSmartAdTargets(array $value)
    {
        $this->SmartAdTargets = $value;

        return $this;
    }
}
