<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class VideoExtensionGetItem
{
    /** @var int */
    protected $CreativeId;

//    Can be omitted.
//    protected $Status;

    /** @var string */
    protected $ThumbnailUrl;

    /** @var string */
    protected $PreviewUrl;

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
     * Get Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @return 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @param 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

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
