<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAudienceTargetsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $AudienceTargets = null;

    /**
     * Creates a new instance of GetAudienceTargetsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets AudienceTargets.
     *
     * @return AudienceTargetGetItem[]|null
     */
    public function getAudienceTargets(): ?array
    {
        return $this->AudienceTargets ?? null;
    }

    /**
     * Sets AudienceTargets.
     *
     * @param AudienceTargetGetItem[]|null $value
     *
     * @return $this
     */
    public function setAudienceTargets(?array $value = null)
    {
        $this->AudienceTargets = $value;

        return $this;
    }
}
