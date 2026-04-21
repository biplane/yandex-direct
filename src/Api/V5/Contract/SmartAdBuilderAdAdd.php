<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmartAdBuilderAdAdd
{
//    Can be omitted.
//    protected $LogoExtensionHash;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get LogoExtensionHash
     */
    public function getLogoExtensionHash(): ?string
    {
        return $this->LogoExtensionHash ?? null;
    }

    /**
     * Set LogoExtensionHash
     *
     * @return $this
     */
    public function setLogoExtensionHash(?string $value)
    {
        $this->LogoExtensionHash = $value;

        return $this;
    }
}
