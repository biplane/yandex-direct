<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdBuilderAdAdd extends AdBuilderAdAddBase
{
//    Can be omitted.
//    protected $TrackingUrl;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get TrackingUrl
     */
    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * Set TrackingUrl
     *
     * @return $this
     */
    public function setTrackingUrl(?string $value)
    {
        $this->TrackingUrl = $value;

        return $this;
    }
}
