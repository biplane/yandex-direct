<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageGetItemShort extends ExtensionModeration
{
    protected $ImageHash = null;

    public function getImageHash(): string
    {
        return $this->ImageHash;
    }

    /**
     * @return $this
     */
    public function setImageHash(string $value)
    {
        $this->ImageHash = $value;

        return $this;
    }
}
