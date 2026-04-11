<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class VideoExtensionWithStatusClarificationGetItem extends ExtensionModeration
{
    protected $CreativeId = null;

    protected $ThumbnailUrl = null;

    protected $PreviewUrl = null;

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
