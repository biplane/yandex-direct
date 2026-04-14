<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdBuilderAdGetItem
{
    /** @var int */
    protected $CreativeId;

//    Can be omitted.
//    protected $ThumbnailUrl;

//    Can be omitted.
//    protected $PreviewUrl;

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
     * Get CreativeId
     */
    public function getCreativeId(): int
    {
        return $this->CreativeId;
    }

    /**
     * Set CreativeId
     *
     * @return $this
     */
    public function setCreativeId(int $value)
    {
        $this->CreativeId = $value;

        return $this;
    }

    /**
     * Get ThumbnailUrl
     */
    public function getThumbnailUrl(): ?string
    {
        return $this->ThumbnailUrl ?? null;
    }

    /**
     * Set ThumbnailUrl
     *
     * @return $this
     */
    public function setThumbnailUrl(?string $value)
    {
        $this->ThumbnailUrl = $value;

        return $this;
    }

    /**
     * Get PreviewUrl
     */
    public function getPreviewUrl(): ?string
    {
        return $this->PreviewUrl ?? null;
    }

    /**
     * Set PreviewUrl
     *
     * @return $this
     */
    public function setPreviewUrl(?string $value)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
