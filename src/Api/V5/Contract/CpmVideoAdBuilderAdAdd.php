<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CpmVideoAdBuilderAdAdd extends AdBuilderAdAddBase
{
//    Can be omitted.
//    protected $Href;

//    Can be omitted.
//    protected $TrackingPixels;

//    Can be omitted.
//    protected $TurboPageId;

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
     * Get Href
     */
    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * Set Href
     *
     * @return $this
     */
    public function setHref(?string $value)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Get TrackingPixels
     *
     * @return non-empty-list<string>|null
     */
    public function getTrackingPixels(): ?array
    {
        return $this->TrackingPixels ?? null;
    }

    /**
     * Set TrackingPixels
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setTrackingPixels(?array $value)
    {
        $this->TrackingPixels = $value;

        return $this;
    }

    /**
     * Get TurboPageId
     */
    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * Set TurboPageId
     *
     * @return $this
     */
    public function setTurboPageId(?int $value)
    {
        $this->TurboPageId = $value;

        return $this;
    }
}
