<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TrackingPixelGetItem
{
    protected $TrackingPixel = null;

    protected $Provider = null;

    /**
     * Creates a new instance of TrackingPixelGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TrackingPixel.
     */
    public function getTrackingPixel(): string
    {
        return $this->TrackingPixel;
    }

    /**
     * Sets TrackingPixel.
     *
     * @return $this
     */
    public function setTrackingPixel(string $value)
    {
        $this->TrackingPixel = $value;

        return $this;
    }

    /**
     * Gets Provider.
     */
    public function getProvider(): string
    {
        return $this->Provider;
    }

    /**
     * Sets Provider.
     *
     * @return $this
     */
    public function setProvider(string $value)
    {
        $this->Provider = $value;

        return $this;
    }
}
