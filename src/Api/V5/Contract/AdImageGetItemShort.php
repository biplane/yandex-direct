<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageGetItemShort extends ExtensionModeration
{
    /** @var string */
    protected $ImageHash;

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
     * Get ImageHash
     */
    public function getImageHash(): string
    {
        return $this->ImageHash;
    }

    /**
     * Set ImageHash
     *
     * @return $this
     */
    public function setImageHash(string $value)
    {
        $this->ImageHash = $value;

        return $this;
    }
}
