<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppCpcVideoAdBuilderAdGet extends AdBuilderAdGetBase
{
//    Can be omitted.
//    protected $TrackingUrl = null;

    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setTrackingUrl(?string $value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }
}
