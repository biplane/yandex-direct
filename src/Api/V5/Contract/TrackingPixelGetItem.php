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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTrackingPixel(): string
    {
        return $this->TrackingPixel;
    }

    /**
     * @return $this
     */
    public function setTrackingPixel(string $value)
    {
        $this->TrackingPixel = $value;

        return $this;
    }

    public function getProvider(): string
    {
        return $this->Provider;
    }

    /**
     * @return $this
     */
    public function setProvider(string $value)
    {
        $this->Provider = $value;

        return $this;
    }
}
