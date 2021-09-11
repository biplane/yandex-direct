<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VideoExtensionGetItem
{
    protected $CreativeId = null;

//    Can be omit.
//    protected $Status = null;

    protected $ThumbnailUrl = null;

    protected $PreviewUrl = null;

    /**
     * Creates a new instance of VideoExtensionGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CreativeId.
     */
    public function getCreativeId(): int
    {
        return $this->CreativeId;
    }

    /**
     * Sets CreativeId.
     *
     * @return $this
     */
    public function setCreativeId(int $value)
    {
        $this->CreativeId = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Sets Status.
     *
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets ThumbnailUrl.
     */
    public function getThumbnailUrl(): string
    {
        return $this->ThumbnailUrl;
    }

    /**
     * Sets ThumbnailUrl.
     *
     * @return $this
     */
    public function setThumbnailUrl(string $value)
    {
        $this->ThumbnailUrl = $value;

        return $this;
    }

    /**
     * Gets PreviewUrl.
     */
    public function getPreviewUrl(): string
    {
        return $this->PreviewUrl;
    }

    /**
     * Sets PreviewUrl.
     *
     * @return $this
     */
    public function setPreviewUrl(string $value)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
