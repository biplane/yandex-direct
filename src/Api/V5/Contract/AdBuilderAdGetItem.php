<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdGetItem
{
    protected $CreativeId = null;

//    Can be omit.
//    protected $ThumbnailUrl = null;

//    Can be omit.
//    protected $PreviewUrl = null;

    /**
     * Creates a new instance of AdBuilderAdGetItem.
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
     * Gets ThumbnailUrl.
     */
    public function getThumbnailUrl(): ?string
    {
        return $this->ThumbnailUrl ?? null;
    }

    /**
     * Sets ThumbnailUrl.
     *
     * @return $this
     */
    public function setThumbnailUrl(?string $value = null)
    {
        $this->ThumbnailUrl = $value;

        return $this;
    }

    /**
     * Gets PreviewUrl.
     */
    public function getPreviewUrl(): ?string
    {
        return $this->PreviewUrl ?? null;
    }

    /**
     * Sets PreviewUrl.
     *
     * @return $this
     */
    public function setPreviewUrl(?string $value = null)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
