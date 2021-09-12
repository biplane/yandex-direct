<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAudienceTargetsRequest
{
    protected $AudienceTargets = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AudienceTargetAddItem[]
     */
    public function getAudienceTargets(): array
    {
        return $this->AudienceTargets;
    }

    /**
     * @param AudienceTargetAddItem[] $value
     *
     * @return $this
     */
    public function setAudienceTargets(array $value)
    {
        $this->AudienceTargets = $value;

        return $this;
    }
}
