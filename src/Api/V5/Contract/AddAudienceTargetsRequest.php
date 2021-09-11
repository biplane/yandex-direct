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
     * Creates a new instance of AddAudienceTargetsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AudienceTargets.
     *
     * @return AudienceTargetAddItem[]
     */
    public function getAudienceTargets(): array
    {
        return $this->AudienceTargets;
    }

    /**
     * Sets AudienceTargets.
     *
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
