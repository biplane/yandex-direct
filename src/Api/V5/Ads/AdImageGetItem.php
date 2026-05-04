<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Ads;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\ExtensionModeration;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageGetItem extends ExtensionModeration
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
