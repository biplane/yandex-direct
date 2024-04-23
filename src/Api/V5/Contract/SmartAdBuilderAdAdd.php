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
//    protected $LogoExtensionHash = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLogoExtensionHash(): ?string
    {
        return $this->LogoExtensionHash ?? null;
    }

    /**
     * @return $this
     */
    public function setLogoExtensionHash(?string $value = null)
    {
        $this->LogoExtensionHash = $value;

        return $this;
    }
}
