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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return SmartAdTargetAddItem[]
     */
    public function getSmartAdTargets(): array
    {
        return $this->SmartAdTargets;
    }

    /**
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
