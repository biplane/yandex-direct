<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdBuilderAdGetItem
{
    protected $CreativeId = null;

//    Can be omitted.
//    protected $ThumbnailUrl = null;

//    Can be omitted.
//    protected $PreviewUrl = null;

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

    public function getThumbnailUrl(): ?string
    {
        return $this->ThumbnailUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setThumbnailUrl(?string $value = null)
    {
        $this->ThumbnailUrl = $value;

        return $this;
    }

    public function getPreviewUrl(): ?string
    {
        return $this->PreviewUrl ?? null;
    }

    /**
     * @return $this
     */
    public function setPreviewUrl(?string $value = null)
    {
        $this->PreviewUrl = $value;

        return $this;
    }
}
