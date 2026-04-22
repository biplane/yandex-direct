<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class VideoExtensionWithStatusClarificationGetItem extends ExtensionModeration
{
    /** @var int */
    protected $CreativeId;

    /** @var string */
    protected $ThumbnailUrl;

    /** @var string */
    protected $PreviewUrl;

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
    public function getThumbnailUrl(): string
    {
        return $this->ThumbnailUrl;
    }

    /**
     * Set ThumbnailUrl
     *
     * @return $this
     */
    public function setThumbnailUrl(string $value)
    {
        $this->ThumbnailUrl = $value;

        return $this;
    }

    /**
     * Get PreviewUrl
     */
    public function getPreviewUrl(): string
    {
        return $this->PreviewUrl;
    }

    /**
     * Set PreviewUrl
     *
     * @return $this
     */
    public function setPreviewUrl(string $value)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
