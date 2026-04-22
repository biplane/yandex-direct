<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class VideoExtensionAddItem
{
//    Can be omitted.
//    protected $CreativeId;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get CreativeId
     */
    public function getCreativeId(): ?int
    {
        return $this->CreativeId ?? null;
    }

    /**
     * Set CreativeId
     *
     * @return $this
     */
    public function setCreativeId(?int $value)
    {
        $this->CreativeId = $value;

        return $this;
    }
}
