<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppImageAdGet extends ImageAdGetBase
{
//    Can be omit.
//    protected $TrackingUrl = null;

    /**
     * Creates a new instance of MobileAppImageAdGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TrackingUrl.
     */
    public function getTrackingUrl(): ?string
    {
        return $this->TrackingUrl ?? null;
    }

    /**
     * Sets TrackingUrl.
     *
     * @return $this
     */
    public function setTrackingUrl(?string $value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }
}
