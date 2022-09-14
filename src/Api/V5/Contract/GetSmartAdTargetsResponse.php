<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetSmartAdTargetsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $SmartAdTargets = null;

    /**
     * @return SmartAdTargetGetItem[]|null
     */
    public function getSmartAdTargets(): ?array
    {
        return $this->SmartAdTargets ?? null;
    }

    /**
     * @param SmartAdTargetGetItem[]|null $value
     *
     * @return $this
     */
    public function setSmartAdTargets(?array $value = null)
    {
        $this->SmartAdTargets = $value;

        return $this;
    }
}
