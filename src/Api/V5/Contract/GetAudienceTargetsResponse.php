<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetAudienceTargetsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $AudienceTargets = null;

    /**
     * @return AudienceTargetGetItem[]|null
     */
    public function getAudienceTargets(): ?array
    {
        return $this->AudienceTargets ?? null;
    }

    /**
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
