<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppAdBuilderAdUpdate extends AdBuilderAdUpdateBase
{
//    Can be omitted.
//    protected $TrackingUrl;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
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
