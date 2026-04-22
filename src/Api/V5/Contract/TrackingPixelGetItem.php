<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TrackingPixelGetItem
{
    /** @var string */
    protected $TrackingPixel;

    /** @var string */
    protected $Provider;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get TrackingPixel
     */
    public function getTrackingPixel(): string
    {
        return $this->TrackingPixel;
    }

    /**
     * Set TrackingPixel
     *
     * @return $this
     */
    public function setTrackingPixel(string $value)
    {
        $this->TrackingPixel = $value;

        return $this;
    }

    /**
     * Get Provider
     */
    public function getProvider(): string
    {
        return $this->Provider;
    }

    /**
     * Set Provider
     *
     * @return $this
     */
    public function setProvider(string $value)
    {
        $this->Provider = $value;

        return $this;
    }
}
