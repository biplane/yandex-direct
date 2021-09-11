<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VideoExtensionUpdateItem
{
//    Can be omit.
//    protected $CreativeId = null;

    /**
     * Creates a new instance of VideoExtensionUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CreativeId.
     */
    public function getCreativeId(): ?int
    {
        return $this->CreativeId ?? null;
    }

    /**
     * Sets CreativeId.
     *
     * @return $this
     */
    public function setCreativeId(?int $value = null)
    {
        $this->CreativeId = $value;

        return $this;
    }
}
