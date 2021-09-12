<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VideoExtensionGetItem
{
    protected $CreativeId = null;

//    Can be omitted.
//    protected $Status = null;

    protected $ThumbnailUrl = null;

    protected $PreviewUrl = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCreativeId(): int
    {
        return $this->CreativeId;
    }

    /**
     * @return $this
     */
    public function setCreativeId(int $value)
    {
        $this->CreativeId = $value;

        return $this;
    }

    /**
     * @see StatusEnum
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * @see StatusEnum
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }

    public function getThumbnailUrl(): string
    {
        return $this->ThumbnailUrl;
    }

    /**
     * @return $this
     */
    public function setThumbnailUrl(string $value)
    {
        $this->ThumbnailUrl = $value;

        return $this;
    }

    public function getPreviewUrl(): string
    {
        return $this->PreviewUrl;
    }

    /**
     * @return $this
     */
    public function setPreviewUrl(string $value)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
